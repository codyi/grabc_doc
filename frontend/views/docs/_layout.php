<h4 id="layout" class="page-header">设置GRABC的layout</h4>
<p>
在GRABC中已经内置了layout，GRABC还提供了设置layout的方法，从而保证GRABC插件能更好地融合到现在的系统中
</p>
<pre class="code">
//设置grabc的layout
//参数一：layout的名称
//参数二：layout的路径
grabc.SetLayout("layout/main.html", "views")
</pre>
<p>
当然有时候layout中需要显示一些动态数据，比如显示登录的用户名，那么就需要设置GRABC的layout参数，因为在加载GRABC的页面时候，会使用你设置的layout，而GRABC却不知道需要什么变量，所以提供了设置layout参数的方法
</p>
<pre class="code">
//参数一：变量名称
//参数二：变量的值，可以是任意的类型
grabc.AddLayoutData("user_name", this.Data["user_name"])
</pre>