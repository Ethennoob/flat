<?php include_once('../../lib/common.function.php' );check_admin();
$rs=get_index_content_by_id(_get('id'),'');?>
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
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="col-xs-5">
<form method="post" class="form-horizontal center-block" action="../do.php?e=edit_index_content_vector">
<table class="table table-bordered">
   <caption><h2>矢量图内容修改</h2></caption>
   <tbody>
      <tr>
         <td>标题</td>
         <td><textarea class="form-control" name="index-title" placeholder="title 1"><?=$rs['title']?></textarea></td>
      </tr>
      <tr>
         <td>内容</td>
         <td><textarea class="form-control" name="index-content" placeholder="title 2"><?=$rs['content']?></textarea></td>
      </tr>
      <tr>
         <td>矢量图</td>
         <td><textarea class="form-control" name="index-vector" placeholder="矢量图"><?=$rs['vectorpic']?></textarea></td>
      </tr>
   </tbody>
</table>
      <button type="submit" class="btn btn-primary buttonn" name="signin">修改</button>
      <input type="hidden" name="id" value="<?=$rs['id']?>" />
      <button type="reset" class="btn btn-info buttonn" id="resetBtn">重置</button>
</form>
</div>
<script type="text/javascript">
    window.onload = function()
    {
        CKEDITOR.replace( 'index-content' );
    };
</script>
</body>
</html>
