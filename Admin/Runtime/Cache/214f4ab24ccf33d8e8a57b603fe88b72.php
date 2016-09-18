<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>链接管理</title>

  <!--external css-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/js/fuelux/css/tree-style.css" />

  <link href="__PUBLIC__/css/style.css" rel="stylesheet">
  <link href="__PUBLIC__/css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="__PUBLIC__/js/html5shiv.js"></script>
  <script src="__PUBLIC__/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!--@1 左侧 start-->
    <div class="left-side sticky-left-side">

        <!--logo and ico start-->
        <div class="logo">
            <a href="index.html"><img src="__PUBLIC__/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="__PUBLIC__/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and ico end-->

        <div class="left-side-inner">

            <!-- 仅用于小屏幕 -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="__PUBLIC__/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">admin</a></h4>
                        <span>"Hello 这里..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">账户信息</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>设置</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>注销</span></a></li>
                </ul>
            </div>
            <!--侧边导航栏 start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>首页</span></a></li>
                <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>推广管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo U('User/page1');?>"> 用户管理</a></li>
                        <li><a href="<?php echo U('User/page2');?>"> 链接管理</a></li>
                        <li><a href="<?php echo U('User/page3');?>"> 活动页面</a></li>
                    </ul>
                </li>
            </ul>
            <!--侧边导航栏 end-->
        </div>
    </div>
    <!--@1 左侧 end-->
    
    <!-- 主要内容 start-->
    <div class="main-content" >

        <!--@2 标题部分 start-->
        <div class="header-section">

            <!--切换按钮 start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--切换按钮 end-->

            <!--搜索 start-->
            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="搜搜看..." />
            </form>
            <!--搜索 end-->

            <!--通知菜单 start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">你有8个未完成的任务</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>数据库更新</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>仪表板做的</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                <span class="">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Web开发</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                <span class="">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>手机APP</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                <span class="">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>固定的问题</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                <span class="">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">查看所有任务</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">你有5个邮件</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="__PUBLIC__/images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="__PUBLIC__/images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="__PUBLIC__/images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="__PUBLIC__/images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="__PUBLIC__/images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">查看所有邮件</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">通知</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">查看所有通知</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="__PUBLIC__/images/photos/user-avatar.png" alt="" />
                            admin
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  个人信息</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  设置</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> 注销</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--通知菜单 end -->

        </div>
        <!--@2 标题部分 end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                链接管理
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">首页</a>
                </li>
                <li>
                    <a href="#">推广管理</a>
                </li>
                <li class="active"> 链接管理 </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div id="main" class="col-md-12">
                    <ul id="browser" class="filetree">
                        <li><span class="folder">文件夹2</span>
                            <ul>
                                <li><span class="file">文件1</span></li>
                                <li><span class="file">文件2</span></li>
                                <li><span class="file">文件3</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            Tree Style #1
                           <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div id="FlatTree" class="tree tree-plus-minus">
                                <div class = "tree-folder" style="display:none;">
                                    <div class="tree-folder-header">
                                        <i class="fa fa-folder"></i>
                                        <div class="tree-folder-name"></div>
                                    </div>
                                    <div class="tree-folder-content"></div>
                                    <div class="tree-loader" style="display:none"></div>
                                </div>
                                <div class="tree-item" style="display:none;">
                                    <i class="tree-dot"></i>
                                    <div class="tree-item-name"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            Tree Style #2
                           <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div id="FlatTree2" class="tree">
                                <div class = "tree-folder" style="display:none;">
                                    <div class="tree-folder-header">
                                        <i class="fa fa-folder"></i>
                                        <div class="tree-folder-name"></div>
                                    </div>
                                    <div class="tree-folder-content"></div>
                                    <div class="tree-loader" style="display:none"></div>
                                </div>
                                <div class="tree-item" style="display:none;">
                                    <i class="tree-dot"></i>
                                    <div class="tree-item-name">erqwerqwer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
<!--             <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            Tree Style #3
                           <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div id="FlatTree3" class="tree tree-plus-minus tree-solid-line tree-unselectable">
                                <div class = "tree-folder" style="display:none;">
                                    <div class="tree-folder-header">
                                        <i class="fa fa-folder"></i>
                                        <div class="tree-folder-name"></div>
                                    </div>
                                    <div class="tree-folder-content"></div>
                                    <div class="tree-loader" style="display:none"></div>
                                </div>
                                <div class="tree-item" style="display:none;">
                                    <i class="tree-dot"></i>
                                    <div class="tree-item-name"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            Tree Style #4
                          <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div id="FlatTree4" class="tree tree-solid-line">
                                <div class = "tree-folder" style="display:none;">
                                    <div class="tree-folder-header">
                                        <i class="fa fa-folder"></i>
                                        <div class="tree-folder-name"></div>
                                    </div>
                                    <div class="tree-folder-content"></div>
                                    <div class="tree-loader" style="display:none"></div>
                                </div>
                                <div class="tree-item" style="display:none;">
                                    <i class="tree-dot"></i>
                                    <div class="tree-item-name"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
            2016 &copy; Admin by 大连再生资源
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
<script src="__PUBLIC__/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="__PUBLIC__/js/jquery-migrate-1.2.1.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/modernizr.min.js"></script>
<script src="__PUBLIC__/js/jquery.nicescroll.js"></script>

<!-- tree -->
<link rel="stylesheet" href="__PUBLIC__/js/tree/jquery.treeview.css" />
<link rel="stylesheet" href="__PUBLIC__/js/tree/screen.css" />
<script src="__PUBLIC__/js/tree/jquery.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/tree/jquery.cookie.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/tree/jquery.treeview.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/tree/jquery.treeview.edit.js" type="text/javascript"></script>   

<!--tree-->
<script src="__PUBLIC__/js/fuelux/js/tree.min.js"></script>
<script src="__PUBLIC__/js/tree-init.js"></script>

<!--common scripts for all pages-->
<script src="__PUBLIC__/js/scripts.js"></script>



<script>
    jQuery(document).ready(function() {
        TreeView.init();
    });
</script>

</body>
</html>