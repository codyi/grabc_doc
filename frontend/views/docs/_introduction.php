<h4 id="introduction" class="page-header">GRABC 简介</h4>
<p>
GRABC 是beego框架的权限管理插件，尤其适合系统后台的使用，可以非常方便的对后台管理员进行授权。用户授权过程：用户绑定角色，角色绑定权限，权限绑定路由。所以在系统初次使用，需要先对权限进行绑定和分配。
GRABC还提供了导航菜单的创建功能，可以对系统左侧菜单进行管理（目前只支持二级菜单），从而实现用户角色不同，菜单显示也不一样。
</p>
<pre>
GRABC主要功能包括:
1. 路由添加、删除
2. 权限添加、删除、修改、路由绑定到权限--
3. 角色添加、删除、修改、权限绑定到角色
4. 用户授权，角色绑定到用户
5. 菜单添加、删除、修改
</pre>
<p>
GRABC样式依赖的前端框架：
</p>
<pre>
<a href="https://adminlte.io/themes/AdminLTE/index2.html" target="_blank" style="margin-right: 20px">AdminLTE 2(v2的版本)</a>AdminLTE的皮肤采用了skin-blue
<a href="http://www.bootcss.com/" target="_blank">Bootstrap(v3的版本)</a>
<a href="http://www.fontawesome.com.cn/" target="_blank">Font Awesome(v4的版本)</a>
</pre>