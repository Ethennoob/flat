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
<h1>展示页内容管理</h1>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>展示页面大标题</h2></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>介绍</th>
         <th>修改</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_index_content_by_type(25);
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
   <?php $records=get_index_content_by_type(26);
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
   <caption><h2>图片内容管理</h2></caption>
   <caption><input type="submit" class="btn btn-lg btn-success" value="添加" onclick="javascrtpt:window.location.href='pic-add.php'"/></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>type</th>
         <th>标题</th>
         <th>图片</th>
         <th>删除</th>
      </tr>
   </thead>
   <tbody>
   <?php $records=get_picshow_by_type(1);
   if(is_array($records))    
   {  
      foreach(array_reverse($records) as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['type']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo "<img src='../../do.php?action=show&id=". $rs['id']."'&'".time()." alt=".$rs['title']." width='150' />" ?></td>
         <td><a href="../do.php?h=del_pic_content&id=<?php echo $rs['id']; ?>">删除</a></td>
      </tr>
      <?php }};?>
   </tbody>
   
</table>
</div>

</body>
</html>
