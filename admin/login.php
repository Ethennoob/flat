<?php 
include('../lib/common.function.php' );?>
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
<body>
    <div class="row">
    	<div class="col-md-12">
    		<div class="login-bg">
    		<div>
    			 <section>
                <div class="col-md-9 col-md-offset-3 text-info">
                <div class="login-content">
                <h2>胖子UI后台管理</h2>
                    <form id="defaultForm" method="post" class="form-horizontal center-block" action="do.php?a=adminlogin">
                    <div class="form-group">
                      <label class="col-md-3 control-label">管理员</label>
                      <div class="col-md-3">
                                <input type="text" class="form-control" name="adminname" placeholder="Admin ID"/> 
                      </div>
                    </div>

                    <div class="form-group">
                            <label class="col-md-3 control-label">密　码</label>
                            <div class="col-md-3">
                                <input type="password" class="form-control" name="password" placeholder="password"/>
                            </div>
                    </div>
                    <div class="form-group">
                            <label class="col-md-3 control-label">验证码</label>
                            <div class="col-md-1">
                                <input type="text" class="form-control" name="code" placeholder="code"/>
                            </div>
                            <div class="col-md-1">
                                <img style="width:80px;height: 35px;position: absolute;top: 0px;"  title="点击刷新" src="../lib/captcha.php" align="absbottom" onclick="this.src='../lib/captcha.php?'+Math.random();">
                            </div>
                    </div>

                        

                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-primary buttonn" name="signin" value="Sign in">登陆</button>
                                <button type="reset" class="btn btn-info buttonn" id="resetBtn">重置</button>
                            </div>
                        </div>
                        <address class="col-md-3">
                        <strong>走错路了？</strong><br>
                        <a href="../index.php">返回web</a>
                        </address>
                    </form>
                    </div>
                </div>
                </div>
            </section>
    	</div>
    </div>
</div>
<script type="text/javascript" src="js/admin-login-up.js"></script>
</body>
</html>