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
<div class="col-xs-5">
<table class="table table-striped">
   <caption><h2>服务器信息</h2></caption>
   <tbody>
      <tr>
         <td>当前IP</td>
         <td><?php echo GetHostByName($_SERVER['SERVER_NAME']); ?></td>
      </tr>
      <tr>
         <td>当前时间</td>
         <td><?php date_default_timezone_set('Etc/GMT-8');     //这里设置了时区
            echo date("Y-m-d H:i:s");?></td>
      </tr>
      <tr>
         <td>PHP版本号</td>
         <td><?php echo PHP_VERSION; ?></td>
      </tr>
      <tr>
         <td>PHP运行方式</td>
         <td><?php echo php_sapi_name(); ?></td>
      </tr>
      <tr>
         <td>服务器语言</td>
         <td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></td>
      </tr>
      <tr>
         <td>服务器web端口</td>
         <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
      </tr>
      <tr>
         <td>服务器解译引擎</td>
         <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
      </tr>
      <tr>
         <td>服务器系统类型</td>
         <td><?php echo php_uname('s'); ?></td>
      </tr>
   </tbody>
</table>

</div>
</body>
</html>