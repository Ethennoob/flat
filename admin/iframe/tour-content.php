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
<div class="col-xs-12">
<h1>游客页内容管理</h1>
<div class="alert alert-danger">游客页因布局要求内容均不可添加和删除</div>
<table class="table table-bordered">
   <caption><h2>第一版介绍</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题1</th>
         <th>内容1</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(10);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
   <thead>
      <tr>
         <th>id</th>
         <th>标题2</th>
         <th>内容2</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(11);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
</div>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>第二版介绍</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>第二版标题</th>
         <th>第二版内容</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(12);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
   <thead>
      <tr>
         <th>id</th>
         <th>标题2</th>
         <th>内容2</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(13);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
</div>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>第三版介绍</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>第三版标题</th>
         <th>第三版内容</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(14);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
   <thead>
      <tr>
         <th>id</th>
         <th>标题2</th>
         <th>内容2</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(15);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
<table class="table table-bordered">
   <caption><h2>第四版介绍</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>第四版标题</th>
         <th>第四版内容</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(16);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
   <thead>
      <tr>
         <th>id</th>
         <th>标题2</th>
         <th>内容2</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(17);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
<table class="table table-bordered">
   <caption><h2>第五版介绍</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>第五版标题</th>
         <th>第五版内容</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(18);
   if(is_array($records))    //add
   {     
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
</div>
</body>
</html>
