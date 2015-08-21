<?php include_once('../lib/common.function.php' );check_admin();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>胖子UI后台管理</title>
<link href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrapValidator.css"/>
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/bootstrapValidator.js"></script>
</head>
<body style="background: #ddd;">
   <nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="index.php">胖子 UI 后台管理</a>
   </div>
   <div>
      <ul class="nav navbar-nav pull-right">
         <li><a href="index.php">首页</a></li>
         <li><a href="setup.php">设置</a></li>
         <li class="active"><a href="content.php">内容</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <?=admin_name();?>
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
            <li><a href="setup.php">修改密码</a></li>
               <li class="divider"></li>
               <li><a href="do.php?c=logout">注销</a></li>
            </ul>
         </li>
      </ul>
   </div>
</nav>
<div class="row">
        <div class="col-md-2" >
        <div class="leftnav">
            <ul class="nav nav-tabs nav-stacked">
            <li class="active"><a href="iframe/user-content.php" target="mainFrame">用户管理</a></li>
            <li class="active"><a href="iframe/tour-content.php" target="mainFrame">游客页</a></li>
                <li class="active"><a href="iframe/index-content.php" target="mainFrame">首页<b class="caret"></b></a></li>
                <li><a href="iframe/index-add-content1.php" target="mainFrame">添加UI介绍</a></li>
                <li><a href="iframe/index-add-content2.php" target="mainFrame">添加UI版本信息</a></li>
                <li class="active"><a href="iframe/login-content.php" target="mainFrame">登陆注册页</a></li>
                <li class="active"><a href="iframe/buy-content.php" target="mainFrame">购买页</a></li>
                <li class="active"><a href="iframe/pic-content.php" target="mainFrame">展示页<b class="caret"></b></a></li>
                <li><a href="iframe/pic-add.php" target="mainFrame">添加图片展示</a></li>
                <li class="active"><a href="iframe/article-content.php" target="mainFrame">交流页<b class="caret"></b></a></li>
                <li><a href="iframe/article-add.php" target="mainFrame">添加博客</a></li>
                <li><a href="iframe/comment-content.php" target="mainFrame">评论管理</a></li>
            </ul>
         </div>
        </div>
        <div class="col-md-10" style="background:#fff;height: 700px;">
        <iframe id="mainFrame" name="mainFrame" width="100%" frameborder="0" scrolling="yes" src="iframe/index-content.php" height="700px"></iframe>
        </div>
</div>
</body>
</html>
