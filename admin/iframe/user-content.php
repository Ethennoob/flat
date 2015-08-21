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
<h1>用户管理</h1>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>用户内容</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>用户名</th>
         <th>邮箱</th>
         <th>删除</th>
      </tr>
   </thead>
   <tbody>

   <?php $records=get_user_by_type(1);
   if(is_array($records))    
   {  
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['user_id']; ?></td>
         <td><?php echo $rs['username']; ?></td>
         <td><?php echo $rs['email']; ?></td>
         <td><a href="../do.php?n=del_user&id=<?php echo $rs['user_id']; ?>">删除</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
</div>

</body>
</html>
