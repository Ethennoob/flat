<?php include_once('../../lib/common.function.php' );check_admin();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<link href="../css/style.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrapValidator.css"/>
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrapValidator.js"></script>
</head>
<body>
<div class="col-xs-5">
<form method="post" class="form-horizontal center-block" action="../do.php?a=save_admin">
<table class="table table-bordered">
   <caption><h2>修改管理员信息</h2></caption>
   <tbody>
      <tr>
         <td>用户名</td>
         <td><input type="text" class="form-control" name="adminname" value="<?=$_SESSION['adminname']?>" placeholder="Admin name"/></td>
      </tr>
      <tr>
         <td>旧密码</td>
         <td><input type="password" class="form-control" name="oldpassword" placeholder="old password"/></td>
      </tr>
      <tr>
         <td>新密码</td>
         <td><input type="password" class="form-control" name="newpassword" placeholder="new password"/></td>
      </tr>
   </tbody>
</table>
<input type="hidden" name="id" value="1" />
      <button type="submit" class="btn btn-primary buttonn" name="signin">修改</button>
      <button type="reset" class="btn btn-info buttonn" id="resetBtn">重置</button>
</form>
</div>
</body>
</html>