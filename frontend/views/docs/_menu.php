<h4 id="menu" class="page-header">使用GRABC的菜单</h4>
<p>
    在GRABC中，提供了菜单管理的功能，目前只支持二级菜单的创建。GRABC插件会根据用户角色不同，对菜单进行权限检查，从而实现了左侧菜单动态展示。
</p>
<p>
    注意：GRABC的菜单图标使用的是<a href="https://adminlte.io/themes/AdminLTE/pages/UI/icons.html">AdminLTE 2 Icons</a>，例如设置菜单的图标为fa-dashboard，即可显示AdminLTE 2的icon。
</p>
<p>
    GRABC提供两种获取菜单的方式，一种是获取数据对象的数据集合，另外一种是返还回html的字符串，直接在layout中显示即可(注意：返还回的html使用了AdminLTE的框架样式)。
</p>
<pre class="code">
方式一：
    获取数据对象的集合

import (
    "github.com/codyi/grabc/libs"
    "fmt"
)

menus := libs.AccessMenus()

for _, menu := range menus {
    fmt.Println("parent menus:")
    fmt.Println((`url:%s  icon:%s name:%s`, menu.Parent.Url, menu.Parent.Icon, menu.Parent.Name)

    if len(menu.Child) > 0 {
        fmt.Println("child menus:")
        for _, childMenu := range menu.Child {
            fmt.Println(`url:%s  icon:%s name:%s`, childMenu.Url, childMenu.Icon, childMenu.Name)
        }
    }
}
</pre>
<pre class="code">
方式二：
    获取菜单的html

base.go中设置获取好layout的变量
import (
    "github.com/codyi/grabc/libs"
)

//获取显示的菜单，并赋值给layout中的变量
this.Data["menus"] = libs.ShowMenu(this.controllerName, this.actionName)

然后在layout.html找到需要显示菜单的位置
{{str2html .menus}}
</pre>