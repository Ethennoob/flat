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
<h1>评论管理</h1>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>评论内容</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>文章id</th>
         <th>评论人</th>
         <th>内容</th>
         <th>时间</th>
         <th>删除</th>
      </tr>
   </thead>
   <tbody>

   <?php $records=get_admincomment_by_type(0);
   if(is_array($records))    
   {  
      foreach(array_reverse($records) as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['tid']; ?></td>
         <td><?php echo $rs['username']; ?></td>
         <td><?php echo mb_substr($rs['content'],0,100,'UTF-8');?>...</td>
         <td><?php echo $rs['timeline']; ?></td>
         <td><a href="../do.php?m=del_comment&id=<?php echo $rs['id']; ?>">删除</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
</div>

</body>
</html>
