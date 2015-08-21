<?php include_once('../lib/common.function.php' );check_admin();
?>
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
      <a class="navbar-brand" href="#">胖子 UI 后台管理</a>
   </div>
   <div>
      <ul class="nav navbar-nav pull-right">
         <li class="active"><a href="index.php">首页</a></li>
         <li><a href="setup.php">设置</a></li>
         <li><a href="content.php">内容</a></li>
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
                <li class="active"><a href="iframe/welcome.php" target="mainFrame">Welcome</a></li>
                <li><a href="iframe/serverInfo.php" target="mainFrame">服务器信息</a></li>
            </ul>
         </div>
        </div>
        <div class="col-md-10" style="background:#fff;height: 700px;">
        <iframe id="mainFrame" name="mainFrame" width="100%" frameborder="0" scrolling="no" src="iframe/welcome.php" height="700px"></iframe>
        </div>
</div>
</body>
</html>
