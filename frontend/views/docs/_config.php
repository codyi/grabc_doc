<h4 id="config"class="page-header">配置</h4>
<p>
    <b>第一步：</b>
    <div>引入GRABC插件。建议在注册路由和控制器关系的文件中引入，因为GRABC也需要对控制器进行注册。
    在我的项目示例(<a href="https://github.com/codyi/grabc_example" target="_blank">grabc_example</a>)中在main.go中引入了grabc插件，当然也可以在router.go中引入。</div>
    <div>下面示例是在main.go中引入GRABC的配置</div>
</p>
<pre class="code">
package main

import (
    <b>"github.com/codyi/grabc"</b>
)

func init() {
    var c []beego.ControllerInterface
    c = append(c, &controllers.SiteController{})
    c = append(c, &controllers.UserController{})

    for _, v := range c {
        //将路由注册到beego
        beego.AutoRouter(v)

        //将路由注册到grabc
        <b>grabc.RegisterController(v)</b>
    }

    //注册用户系统模型到GRABC
    //注意:注册的模型需要实现IUserModel接口
    <b>grabc.RegisterUserModel(&models.User{})</b>

    //增加忽律权限检查的页面
    //参数一：controller名称
    //参数二：action名称
    <b>grabc.AppendIgnoreRoute("site", "login")</b>

    //设置GRABC页面路径，一般情况不需要设置
    //如果需要对GRABC插件的页面进行二次开发，则需要设置这个目录，否则不需要设置
    //注意：设置grabc的模板必须在beego.Run()之前设置，如果视图目录在当前项目中，可以使用相对目录，否则需要绝对路径
    //<b>grabc.SetViewPath("views")</b>

    //设置GRABC的layout,也可以使用GRABC默认的layout
    //设置layout页面的好处是，可以让GRABC插件布局和系统框架统一，详情见<a href="https://github.com/codyi/grabc_example" target="_blank">grabc_example</a>
    <b>grabc.SetLayout("layout/main.html", "views")</b>
}
</pre>
<p>
    <b>第二步：</b>
    <div>增加GRABC权限的判断。个人建议做一个BaseController，每个controller都继承这个base，然后在BaseController中的Prepare方法中增加权限检查~~</div>
    <div>下面部分代码是在<a href="https://github.com/codyi/grabc_example" target="_blank">grabc_example</a>的base.go中引入GRABC的关键配置</div>
</p>
<pre class="code">
base.go

package controllers

import (
	<b>"github.com/codyi/grabc"</b>
)

//BaseController
type BaseController struct {
	beego.Controller
	controllerName string
	actionName     string
	user           User
}

// Prepare
func (this *BaseController) Prepare() {
	controlerName, actionName := this.GetControllerAndAction()
	this.controllerName = strings.ToLower(controlerName[0 : len(controlerName)-10])
	this.actionName = strings.ToLower(actionName)
	//在每次执行action的时候，先执行权限判断
	<b>this.CheckPermision()</b>
}

//检查用户权限
func (this *BaseController) CheckPermision() {
	sessionUId := this.GetSession("login_user_id")

	if sessionUId != nil {
		this.user = User{}
		this.user.FindById(sessionUId.(int))
	}
	<b>
	//对登陆用户进行注册
	grabc.RegisterIdentify(this.user)
	//对登陆用户进行权限检查
	if !grabc.CheckAccess(this.controllerName, this.actionName) {
		this.Redirect(this.URLFor("SiteController.NoPermission"))
	}
    </b>
}
</pre>
<p>
到此grabc的基本功能都加完了，是不是很简单~~~注意：增加完权限判断之后，会发现很多页面都不能访问了，那么就在忽律权限中增加如下配置
</p>
<pre class="code">
grabc.AppendIgnoreRoute("*", "*")
</pre>
<p>
    以上配置将会忽律所有的权限检查，这时候需要去/route/index中增加路由，然后添加权限，角色和用户分配，都配置好之后，就可以将grabc.AppendIgnoreRoute("*", "*")代码删掉，然后重启项目~~权限起作用了
</p>