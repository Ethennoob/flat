<?php 
include_once('lib/common.function.php' );
if($f=_get('a')){
if($f!='login')check_user();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('b')){
if($f!='user_add')user_add();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('c')){
if($f!='logout')logout();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('d')){
if($f!='comment_add')comment_add();
if(function_exists ($f)){
    call_user_func($f); 
}else{
    return ajax_echo('no method:'.$f);
}
}
if($f=_get('s')){
if($f!='get_search')get_search();
if(function_exists ($f)){
    call_user_func($f); 
}else{
    return ajax_echo('no method:'.$f);
}
}
if($f=_get('s')){
if($f!='get_search')get_search();
if(function_exists ($f)){
    call_user_func($f); 
}else{
    return ajax_echo('no method:'.$f);
}
}
//展示图片
// 连接数据库  
$conn=@mysql_connect("localhost","root","")  or die(mysql_error());  
@mysql_select_db('fat',$conn) or die(mysql_error());  
  
// 判断action  
$action = isset($_REQUEST['action'])? $_REQUEST['action'] : '';   
if($action=='add'){  
	$title = $_POST['title'];
    $image = mysql_escape_string(file_get_contents($_FILES['photo']['tmp_name']));  
    $type = $_FILES['photo']['type'];  
    $sqlstr = "insert into photo(cid,type,title,binarydata) values('1','".$type."','".$title."','".$image."')";  
  
    @mysql_query($sqlstr) or die(mysql_error());  
  
    header('location:pic.php');  
    exit();  
  
// 显示图片  
}elseif($action=='show'){  
  
    $id = isset($_GET['id'])? intval($_GET['id']) : 0;  
    $sqlstr = "select * from photo where id=$id";  
    $query = mysql_query($sqlstr) or die(mysql_error());  
      
    $thread = mysql_fetch_assoc($query);   
      
    if($thread){  
        header('content-type:'.$thread['type']);  
        echo $thread['binarydata'];  
        exit();  
    }  
  
}
// 判断action  
$arti = isset($_REQUEST['arti'])? $_REQUEST['arti'] : '';
//插入图片   
if($arti=='add'){  
    $title = $_POST['title'];
    $image = mysql_escape_string(file_get_contents($_FILES['photo']['tmp_name']));  
    $type = $_FILES['photo']['type'];  
    $sqlstr = "insert into article(cid,type,title,content,binarydata) values('1','".$type."','".$title."','".$content."','".$image."')";  
  
    @mysql_query($sqlstr) or die(mysql_error());  
  
    header('location:pic.php');  
    exit();  
  
// 显示图片  
}elseif($arti=='show'){  
  
    $id = isset($_GET['id'])? intval($_GET['id']) : 0;  
    $sqlstr = "select * from article where id=$id";  
    $query = mysql_query($sqlstr) or die(mysql_error());  
      
    $thread = mysql_fetch_assoc($query);   
      
    if($thread){  
        header('content-type:'.$thread['type']);  
        echo $thread['img'];  
        exit();  
    }  
  
}
 ?>