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
<h1>购买页面内容管理</h1>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>购买页面大标题</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>介绍</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(20);
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php };?>
   </tbody>
</table>
</div>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>UI版本信息内容</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>介绍</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(21);
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php };?>
   </tbody>
   <tbody>
   <?php $records=get_index_content_by_type(22);
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php };?>
   </tbody>
</table>
</div>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>基础UI详情内容</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>介绍</th>
         <th>详情</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(23);
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><?php echo $rs['vectorpic']; ?></td>
         <td><a href="index-update-content2.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php };?>
   </tbody>
</table>
</div>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>开发者UI详情内容</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>介绍</th>
         <th>详情</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(24);
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><?php echo $rs['vectorpic']; ?></td>
         <td><a href="index-update-content2.php?id=<?php echo $rs['id']; ?>">修改</a></td>
      </tr>
      <?php };?>
   </tbody>
</table>
</div>
</body>
</html>
