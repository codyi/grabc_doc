<h4 id="interface" class="page-header">接口</h4>
<p>
    GRABC需要实现两个接口
</p>
<p>
    IUserModel接口，用户GRABC插件展示用户列表和用户的角色授权
</p>
<pre class="code">
//用于定义用户model
type IUserModel interface {
    //用户列表返回可用用户的id和姓名
    //参数：pageIndex 分页的页数
    //参数：pageCount 每页显示的用户数量
    //返回值：userList [用户ID]用户姓名，用户列表展示
    //返回值：totalNum 全部的用户数目，用于计算分页的数量
    //返回值：err
    UserList(pageIndex, pageCount int) (userList map[int]string, totalNum int, err error)
    //根据用户ID获取用户姓名
    FindNameById(id int) string
}
</pre>
<p>
    IUserIdentify接口，用于获取当前登陆用户的ID。从而根据用户ID获取用户的角色，进而对登陆的用户权限进行判断
</p>
<pre class="code">
type IUserIdentify interface {
    GetId() int //返回当前登录用户的ID
}
</pre>