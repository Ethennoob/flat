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
<div class="col-xs-8">
<form method="post" class="form-horizontal center-block" action="../do.php?g=index_content_add">
<table class="table table-bordered">
   <caption><h2>UI版本信息添加</h2></caption>
   <tbody>
      <tr>
         <td>标题</td>
         <td><textarea class="form-control" name="index-title" placeholder="title"></textarea></td>
      </tr>
      <tr>
         <td>内容</td>
         <td><textarea class="form-control" name="index-content" placeholder="content"></textarea></td>
      </tr>
   </tbody>
</table>
      <button type="submit" class="btn btn-primary buttonn" name="signin">添加</button>
      <input type="hidden" name="cid" value="4" />
      <button type="reset" class="btn btn-info buttonn" id="resetBtn">重置</button>
</form>
</div>
</body>
</html>
