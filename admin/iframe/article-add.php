<?php include_once('../../lib/common.function.php' );check_admin();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>文章内容添加</title>
<link href="../css/style.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrapValidator.css"/>
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrapValidator.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="col-xs-12">
<form method="post" class="form-horizontal center-block" enctype="multipart/form-data" action="../do.php?l=addarticle">
<table class="table table-bordered">
   <caption><h2>文章内容添加</h2></caption>
   <tbody>
      <tr>
         <td>文章标题</td>
         <td><textarea class="form-control" name="title" placeholder="blog title"></textarea></td>
      </tr>
      <tr>
         <td>文章内容</td>
         <td><textarea class="form-control" name="content" placeholder="content"></textarea></td>
      </tr>
      <tr>
         <td>文章标题图片</td>
         <td><input type="file" class="form-control" placeholder="blogphoto" name="blogphoto"></td>
      </tr>
   </tbody>
</table>
      <button type="submit" class="btn btn-primary buttonn" name="signin">添加</button>
      <button type="reset" class="btn btn-info buttonn" id="resetBtn">重置</button>
</form>
</div>
<script type="text/javascript">
    window.onload = function()
    {
        CKEDITOR.replace( 'content' );
    };
</script>
</body>
</html>
