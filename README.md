LocalsNake COURSE
=================
LocalsNake COURSE 是结合了社交（SNS）和课程管理系统（CMS）的学术社交网站，旨在让学生更即使得获得选修课程的通知、作业、资源，让老师得到更多的课程反馈。

开发框架简介
-----
CodeIgniter 是基于模型-视图-控制器这一设计模式的。MVC 是一种将应用程序的逻辑层和表现层进行分离的方法。在实践中，由于表现层从 PHP 脚本中分离了出来，所以它允许你的网页中只包含很少的脚本。

**视图 (View)**

是展示给用户的信息。一个视图通常是一个网页，但是在 CodeIgniter 中，一个视图也可以是一个页面片段，如页头、页尾。

视图对应的文件夹是application/views,以account/login.php为例，这对应到我们的登陆页面，写好内容后我们可以使用下面的函数来载入这个视图文件：

``` php
$this->load->view('account/login');
```

考虑到我们登陆以后的页面有很多公用的代码，我们建立了一些代码片段，比如一级导航menu.php和inc文件夹中的页头header.php，页尾footer.php。

当我们需要给视图添加动态数据的时候，数据通过控制器以一个数组或是对象的形式传入视图 , 这个数组或对象作为视图载入函数的第二个参数 .下面是使用数组的示例:

```php
$data = array(
'title' => '学术社交网站',
'message' => 'My Message'
);

$this->load->view('blogview', $data);
```

这样在blogview.php中可以使用$title,$message变量来显示动态内容。

关于视图的详细说明请参见：http://codeigniter.org.cn/user_guide/general/views.html


**控制器 (Controller)**

是模型、视图以及其他任何处理 HTTP 请求所必须的资源之间的中介，并生成网页。
控制器对应的文件夹为application/controllers

简而言之，一个控制器就是一个类文件，是以一种能够和 URI 关联在一起的方式来命名的。

```
example.com/index.php/account/login
```

在上面的例子中，CodeIgniter 将尝试寻找并装载一个名为 account.php 的控制器。
当控制器的名字匹配 URI 的第一段时，它将被装载。

我们观察account.php就发现其定义了一个Account类，其login函数即对应了上面的URL。可以看到控制器中控制输出了登陆页面。

关于控制器的详细说明和书写规范请参见：http://codeigniter.org.cn/user_guide/general/controllers.html



**模型 (Model)** 

代表你的数据结构。通常来说，你的模型类将包含取出、插入、更新你的数据库资料这些功能。

其对应的文件夹为application/model文件夹，

模型是专门用来和数据库打交道的PHP类。在处理请求、载入页面前我们需要获取一些动态数据，比如用户的姓名、头像等，这时我们可以在controllers对应的函数中直接写代码获得，但是更好的方式是将这个和数据库打交道，逻辑计算的过程封装到一个模型中，我们之需要load这个模型，并使用里面的函数就可以了。

```php
$this->load->model('Model_name');
$data = $this->Model_name->function();
```

关于模型的详细说明和书写规范请参见：http://codeigniter.org.cn/user_guide/general/models.html

可以看到我现在push的代码里面暂时没有Model文件，这是因为这次push还没有涉及到数据库和复杂的逻辑操作，本次push主要将主要的控制器类的框架搭好了，并对views进行了一定的划分，方便以后前后台并行工作。

前台任务
-----
* 组织好各个view页面，动态数据先用静态文本代替，同时开始书写对应页面的js。（参考views/account/login.php 和 scripts/login.js） @bankq
* 根据组织好的view页面编写相应页面的css(如login.css可以控制登陆页面的样式)。 @imposimon @QDXQDX


各个页面的组织详见Wiki中的网站地图页面：

https://github.com/localsNake/course/wiki/网站地图

接口请见接口说明页面：

https://github.com/localsNake/course/wiki/接口说明

