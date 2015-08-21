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
<div class="col-xs-9">
<form method="post" class="form-horizontal center-block" action="../do.php?o=edit_seo">
<table class="table table-bordered">
   <caption><h2>SEO修改</h2></caption>
   <tbody>
      <tr>
         <td>description</td>
       <?php $records=get_seo_by_type(1);
foreach($records as $rs){?>
         <td><textarea class="form-control" name="description" placeholder="title 1"><?=$rs['description']?></textarea></td>
      </tr>
      <tr>
         <td>keywords</td>
         <td><textarea class="form-control" name="keywords" placeholder="title 2"><?=$rs['keywords']?></textarea></td>
         <?php };?>
      </tr>
   </tbody>
</table>
      <button type="submit" class="btn btn-primary buttonn" name="signin">修改</button>
      <input type="hidden" name="id" value="<?=$rs['id']?>" />
      <button type="reset" class="btn btn-info buttonn" id="resetBtn">重置</button>
</form>
</div>

</body>
</html>
