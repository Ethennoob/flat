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
<h1>首页内容管理</h1>
<table class="table table-bordered">
   <caption><h2>标题头版</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题1</th>
         <th>标题2</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(1);
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
   <caption><h2>第二版描述</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>第二版标题</th>
         <th>第二版内容</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(2);
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
   <caption><h2>UI介绍</h2></caption>
   <caption><input type="submit" class="btn btn-lg btn-success" value="添加" onclick="javascrtpt:window.location.href='index-add-content1.php'"/></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>介绍</th>
         <th>矢量图</th>
         <th>修改</th>
         <th>删除</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(3);
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><?php echo $rs['vectorpic']; ?></td>
         <td><a href="index-update-content2.php?id=<?php echo $rs['id']; ?>">修改</a></td>
         <td><a href="../do.php?d=del_index_content&id=<?php echo $rs['id']; ?>">删除</a></td>
      </tr>
      <?php };?>
   </tbody>
</table>
<table class="table table-bordered">
   <caption><h2>UI版本信息</h2></caption>
   <caption><input type="submit" class="btn btn-lg btn-success" value="添加" onclick="javascrtpt:window.location.href='index-add-content2.php'"/></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>内容</th>
         <th>修改</th>
         <th>删除</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(4);
      foreach($records as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo $rs['content']; ?></td>
         <td><a href="index-update-content1.php?id=<?php echo $rs['id']; ?>">修改</a></td>
         <td><a href="../do.php?d=del_index_content&id=<?php echo $rs['id']; ?>">删除</a></td>
      </tr>
      <?php };?>
   </tbody>
</table>
</div>
</body>
</html>
