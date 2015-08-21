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
<h1>交流页内容管理</h1>
<div class="col-xs-12">
<table class="table table-bordered">
   <caption><h2>交流页内容</h2></caption>
   <caption><input type="submit" class="btn btn-lg btn-success" value="添加" onclick="javascrtpt:window.location.href='article-add.php'"/></caption>
   <thead>
      <tr>
         <th>id</th>
         <th>标题</th>
         <th>内容</th>
         <th>时间</th>
         <th>修改</th>
         <th>删除</th>
      </tr>
   </thead>
   <tbody>

   <?php $records=get_article_by_type(1);
   if(is_array($records))    
   {  
      foreach(array_reverse($records) as $rs){
   ?>
      <tr>
         <td><?php echo $rs['id']; ?></td>
         <td><?php echo $rs['title']; ?></td>
         <td><?php echo mb_substr($rs['content'],0,100,'UTF-8');?>...</td>
         <td><?php echo $rs['timeline']; ?></td>
         <td><a href="article-update.php?id=<?php echo $rs['id']; ?>">修改</a></td>
         <td><a href="../do.php?j=del_article&id=<?php echo $rs['id']; ?>">删除</a></td>
      </tr>
      <?php }};?>
   </tbody>
</table>
</div>

</body>
</html>
