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
  <style>
  ul,li{list-style:none;}
  .folder{cursor:pointer;}
  .file{cursor:pointer;}
  a{display:none;}
  .iptReset{margin:10px 10px;}
  #browser li ul li{margin-top:10px;}
  #browser li ul{overflow-y:scroll;height:500px;}

  .log{height:50%;width:50%;left:25%;top:25%;border:1px solid #e0e0e0;position:absolute;z-index:999;background:white;font-size:16px;display:none;}
  .log .logT{width:100%;height:15%;padding:3% 0 0 2%;background:#f0f0f0;color:#8e8e8e;font-weight:bold;}
  .log input{width:50%;height:60%;border-radius:3px;border:1px solid #adadad;}
  .log button{height:40%;width:15%;border-radius:5px;border:0 none;background:#01b468;color:white;font-weight: bold;}
  .log .logI{width:100%;height:15%;text-align:center;margin-top:3%;}
  .log .logB{width:100%;height:35%;padding-top:3%;text-align:center;}
  .log .logB .save{margin-right:10%;}
  .mask{width:100%;height:100%;background:#adadad;position:absolute;z-index:998;display:none;left:0;top:0;filter:alpha(opacity=30); -moz-opacity:0.3; opacity:0.3;}

  </style>
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
                  <li><a href="<?php echo U("Enter/open2");?>"><i class="fa fa-sign-out"></i> <span>注销</span></a></li>
                </ul>
            </div>
            <!--侧边导航栏 start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <!-- <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>首页</span></a></li> -->
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
                            <li><a href="<?php echo U("Enter/open2");?>"><i class="fa fa-sign-out"></i> 注销</a></li>
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
                活动页面
            </h3>
            <ul class="breadcrumb">
<!--                 <li>
                    <a href="#">首页</a>
                </li> -->
                <li>
                    <a href="#">推广管理</a>
                </li>
                <li class="active"> 活动页面 </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="btn-group iptReset page">
                          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <?php echo ($pageInfo['name']); ?>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <?php if(is_array($pList)): $i = 0; $__LIST__ = $pList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li><a pId="<?php echo ($row["id"]); ?>"><?php echo ($row["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                          </ul>
                        </div>
                        <div class="btn-group iptReset form">
                          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <?php echo ($form['name']); ?>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a fId="1">百度</a></li>
                            <li><a fId="2">360</a></li>
                            <li><a fId="3">搜狗</a></li>
                            <li><a fId="4">新浪扶翼</a></li>
                            <li><a fId="5">百度网盟</a></li>
                            <li><a fId="6">粉丝通</a></li>
                            <li><a fId="7">神马</a></li>
                            <li><a fId="8">陌陌</a></li>
                          </ul>
                        </div>
                        <a class="btn btn-success iptReset sub" role="button">搜 索</a>
                        <div class="input-group iptReset">
                            <span class="input-group-addon">推广链接</span>
                            <input type="text" class="form-control showUrl" readonly="readonly" />
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul id="browser" class="filetree">
                            <li>
                                <span class="folder">
                                    <i class="fa fa-folder"></i>&nbsp;&nbsp;<strong><?php echo ($pageInfo['name']); ?></strong>
                                    <a><i class="fa fa-plus"></i></a>
                                </span>
                                <ul>
                                    <?php if(is_array($lList)): $i = 0; $__LIST__ = $lList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                            <span class="file" id="<?php echo ($row["id"]); ?>" parameter="<?php echo ($row["parameter"]); ?>" url="<?php echo ($row["url"]); ?>">
                                                <i class="fa fa-file"></i>&nbsp;&nbsp;
                                                <strong class="getKeyword"><?php echo ($row["keyword"]); ?></strong>&nbsp;&nbsp;
                                                <a class="getUrl">生成链接</a>
                                                <a><i class="fa fa-edit"></i></a>
                                                <a><i class="fa fa-trash-o"></i></a>
                                            </span>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

        <!-- 蒙罩层 start -->
        <div class="mask"></div>
        <!-- 蒙罩层 end -->

        <!-- 弹出框 start-->
        <div id="log" class="log">
            <div class="logT">添加-活动页面</div>
            <div style="display:none;" class="logId">
                <label>id：</label>
                <input type="text" name="id" />
            </div>
            <div class="logI">
                <label>页面名称：</label>
                <input id="<?php echo ($pageInfo['id']); ?>" type="text" name="pageName" disabled="disabled" value="<?php echo ($pageInfo['name']); ?>" />
            </div>
            <div class="logI">
                <label>推广平台：</label>
                <input id="<?php echo ($form['id']); ?>" type="text" name="form" disabled="disabled" value="<?php echo ($form['name']); ?>" />
            </div>
            <div class="logI keyword">
                <label>链接名称：</label>
                <input type="text" name="keyword" />
            </div>
            <div class="logB">
                <button class="save" type="button">保&nbsp;&nbsp;&nbsp;存</button>
                <button class="cancel" type="button">取&nbsp;&nbsp;&nbsp;消</button>
            </div>
        </div>
        <!-- 弹出框 end -->

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

<!--tree-->
<script src="__PUBLIC__/js/fuelux/js/tree.min.js"></script>
<script src="__PUBLIC__/js/tree-init.js"></script>

<!--common scripts for all pages-->
<script src="__PUBLIC__/js/scripts.js"></script>

<script>
    jQuery(document).ready(function() {
        TreeView.init();
        $(".folder").click(function(){
            var fileDp = $(".file").css("display");
            if(fileDp=="none"){
                $(".file").css("display","block");    
            }else{
                $(".file").css("display","none");
            }
        });
        var jumpUrl = '';
        var fId = 0;
        var pId = 0;
        var seaS ='';
        $(".folder").hover(function(){
            $(this).find("a").css("display","inline-block");
        },function(){
            $(this).find("a").css("display","none");
        });
        $(".file").hover(function(){
            $(this).find("a").css("display","inline-block");
        },function(){
            $(this).find("a").css("display","none");
        });
        $(".iptReset a").click(function(){
            $(this).parent().parent().parent().find("button").text($(this).text());
        });
        $(".form a").click(function(){
            fId = $(this).attr("fId");
        });
        $(".page a").click(function(){
            pId = $(this).attr("pId");
        });
        $(".sub").click(function(){
            var url = window.location.href;
            var colu = url.split("?");
            var rs = 0;
            if(colu[1]){
                var strs = colu[1].split("&");
                if(strs){
                    var pId0 = strs[1].split("=");
                    var fId0 = strs[0].split("=");        
                }    
            }
            if(pId==0){
               if(pId0){
                    pId=pId0[1];
               }else{
                    alert("请选择活动页面");
                    rs=1;    
               } 
            }
            if(fId==0){
               if(fId0){
                    fId=fId0[1];
               }else{
                    alert("请选择推广平台");
                    rs=1;
               } 
            }
            if(rs==0){
                jumpUrl = '?fId='+fId+'&pId='+pId;    
                window.location.href=jumpUrl;
            }    
        });
        $(".getUrl").click(function(){
            var parameter = $(this).parent().attr("parameter");
            var url = $(this).parent().attr("url");
            $(".showUrl").val(url+'?ikey='+parameter);
        });
        $(".fa-plus").click(function(){
            $(".logId input").val("0");
            $("input[name='keyword']").attr("value","");
            $(".logT").text("添加-活动页面");
            $(".mask").show();
            $(".log").show();
        });
        $(".save").click(function(){
            var pId = parseInt($("input[name='pageName']").attr("id"));
            var fId = parseInt($("input[name='form']").attr("id"));
            var keyword = $(".keyword input").val();
            var id = $(".logId input").val();
            if(pId==0 || fId==0){
                alert("亲，还没有选择活动页面或推广平台呢");
                $(".cancel").click();
            }else{
                if(keyword==''){
                    alert("输入不能有空");
                }else{
                    $.get(
                        '<?php echo U("User/editPage2");?>',
                        {id:id,form:fId,pId:pId,keyword:keyword},
                        function(data){
                            if(data==0){
                                alert("操作成功");
                                location.reload();
                            }
                            if(data==1){
                                alert("输入不能有空");
                            }
                            if(data==2){
                                alert("链接名称已存在");
                            }
                            if(data==3){
                                alert("操作失败");
                            }
                            if(data==4){
                                alert("亲，还没有选择活动页面或推广平台呢");
                            }
                            if(data==5){
                                alert("此活动页面可能已被删除");
                            }
                            if(data==6){
                                alert("此推广平台可能已被删除");
                            }
                        },
                        "json"
                    );
                }
            }
        });
        $(".cancel").click(function(){
            $(".mask").hide();
            $(".log").hide();
        });
        $(".fa-edit").click(function(){
            var jdTr = $(this).parent().parent();
            $("input[name='id']").val(jdTr.attr("id"));
            $("input[name='keyword']").attr("value",jdTr.find(".getKeyword").text().trim());
            $(".logT").text("修改-活动页面");
            $(".log").show();
            $(".mask").show();
        });
        $(".fa-trash-o").click(function(){
            if(confirm("确定删除这条数据")){
                var id = $(this).parent().parent().attr("id");
                $.get(
                        '<?php echo U("User/delPage2");?>',
                        {id:id},
                        function(data){
                            if(data==0){
                                alert("删除成功");
                                location.reload();
                            }
                            if(data==1){
                                alert("删除失败");
                            }
                        },
                        "json"
                    );
            }
        });
    });
</script>

</body>
</html>