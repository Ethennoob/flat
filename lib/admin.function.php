<?php
//admin登陆
function is_admin()
{
    return $_SESSION['level'] == 9;
}

function check_admin()
{
    if(!is_admin()){
        forward('./login.php');
        exit;
    }
    include_once(AROOT.'admin.function.php' );
}
function admin_name(){
    return @$_SESSION['adminname']; 
}
function adminlogin(){
    $code = _post('code');
    if ($_SESSION['code']==$code) {
    $u=_post('adminname');
    $p=_post('password');
    if(!($u&&$p)) return false;
    if($admininfo=get_admin_info_by_u_p($u,$p)){
        @session_start();
        foreach( $admininfo as $key => $value ){
            $_SESSION[$key] = $value;
        }
        echo "<script>window.location.href='index.php';</script>";
    }else{
        return ajax_echo('用户名或密码错误');
    }}
    else{
        return ajax_echo('验证码错误');
    }
}
/*修改admin用户名密码*/
function get_admin_info_by_u_p($u,$p){
   $sql = "SELECT * FROM `admin` WHERE `adminname` = '" . s( $u ) . "' LIMIT 1";
    if(!$line = get_line( $sql )) return false;
    $ret = false;
    $passwordv2=($p);
    if( $passwordv2== $line['password'] )
    {
        $ret = $line;
    }
    return $ret; 
}
function save_admin(){
if($u=get_admin_info_by_id(_post('id'))){

    if($u['password']!=_post('oldpassword'))return ajax_echo('旧密码不正确,保存失败') ;
}
if(update_admin(_post('adminname'),(_post('newpassword')?_post('newpassword'):$u['password']))){
    return ajax_echo('您的资料已更改') ;
    }
return ajax_echo('修改失败,原因未知') ;
    
}
function get_admin_info_by_id($id){
    $sql = "SELECT * FROM `admin` WHERE `admin_id` = '" . intval( $id ) . "' LIMIT 1";
    if($line = get_line( $sql )){
        return $line;   
    }
    return false;
}
function update_admin($adminname,$password)
{
    $sql = "UPDATE `admin` SET `adminname`='".s($adminname)."',`password`='".s($password)."' WHERE `admin_id`='1'";
    return run_sql( $sql );
}
/*网站内容修改*/
function edit_index_content(){
    if($id=_post('id')){
        if(update_index_content($id,_post('index-title'),_post('index-content'))>0){
            return ajax_echo('更新成功');
        }
    }
}
function update_index_content($id,$title,$content)
{
    $sql = "UPDATE `index-content` SET `content`='".($content)."', `title`='".($title)."'WHERE `id`='".intval($id)."'";
    return run_sql( $sql );
}
function edit_index_content_vector(){
    if($id=_post('id')){
        if(update_index_content_vector($id,_post('index-title'),_post('index-content'),_post('index-vector'))>0){
            return ajax_echo('更新成功');
        }
    }
}
function update_index_content_vector($id,$title,$content,$vector)
{
    $sql = "UPDATE `index-content` SET `content`='".($content)."', `title`='".($title)."', `vectorpic`='".($vector)."'WHERE `id`='".intval($id)."'";
    return run_sql( $sql );
}
/*删除网站内容*/
function del_index_content(){
	if($id=_get('id')){
		$sql = "DELETE FROM `index-content` WHERE `id`='".$id."'";
		run_sql( $sql );		
	}
	return ajax_echo('删除成功');
}
/*删除展示页内容*/
function del_pic_content(){
	if($id=_get('id')){
		$sql = "DELETE FROM `photo` WHERE `id`='".$id."'";
		run_sql( $sql );		
	}
	return ajax_echo('删除成功');
}
/*删除文章*/
function del_article(){
	if($id=_get('id')){
		$sql = "DELETE FROM `article` WHERE `id`='".$id."'";
		run_sql( $sql );		
	}
	return ajax_echo('删除成功');
}
/*修改文章*/
function edit_article(){
    if($id=_post('id')){
        if(update_article($id,_post('title'),_post('content'))>0){
            return ajax_echo('更新成功');
        }
    }
}
function update_article($id,$title,$content)
{
    $sql = "UPDATE `article` SET `content`='".($content)."', `title`='".($title)."'WHERE `id`='".intval($id)."'";
    return run_sql( $sql );
}
/*添加矢量图*/
function index_content_add_vector(){
	
	if(add_index_content(_post('cid'),_post('index-title'),_post('index-content'),_post('index-vector'))>0){
		return ajax_echo('添加成功');
		}
}

function add_index_content_vector($cid,$title,$content,$vector){
	$sql="INSERT INTO `index-content`(id,cid,title,content,vectorpic) VALUES ( NULL,'".($cid)."','".($title)."','".($content)."','".($vector)."')";
	return run_sql( $sql );
}
/*添加网站内容*/
function index_content_add(){
	if(add_index_content(_post('cid'),_post('index-title'),_post('index-content'))>0){
		return ajax_echo('添加成功');
		}
}

function add_index_content($cid,$title,$content){
	$sql="INSERT INTO `index-content`(id,cid,title,content) VALUES ( NULL,'".($cid)."','".($title)."','".($content)."')";
	return run_sql( $sql );
}
/*----------------评论内容管理-------------*/
/*获取评论至后台*/
function get_admincomment_by_type( $type=0 )
{
    if($type==0){
        $sql = "SELECT * FROM `comment` WHERE `cid`>=0 ";
        }else{
    $sql = "SELECT * FROM `comment` WHERE `cid` = '" . s( $type ) . "'";}
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}
/*删除评论*/
function del_comment(){
	if($id=_get('id')){
		$sql = "DELETE FROM `comment` WHERE `id`='".$id."'";
		run_sql( $sql );		
	}
	return ajax_echo('删除成功');
}
/*添加文章*/
function addarticle(){
// 连接数据库  
$conn=@mysql_connect("localhost","root","")  or die(mysql_error());  
@mysql_select_db('fat',$conn) or die(mysql_error()); 
mysql_query("set names 'UTF8'"); 
	$title = _post('title');
	$content = _post('content');
    $image = mysql_real_escape_string(file_get_contents($_FILES['blogphoto']['tmp_name']),$conn);  
    $type = $_FILES['blogphoto']['type'];
    //检测图片大小
    $max_file_size=2*1024*1024; 
    $file_size=$_FILES['blogphoto']['size'];
    if($file_size>$max_file_size) 
		return ajax_echo('文件太大') ;
	//上传至upload文件夹
	if (file_exists("../upload/" . $_FILES["blogphoto"]["name"]))
      {
      return ajax_echo('本图片已经存在');
      }
    elseif(move_uploaded_file($_FILES["blogphoto"]["tmp_name"],
      "../upload/" . $_FILES["blogphoto"]["name"]))
      {
     //图片插入数据库
      	date_default_timezone_set('PRC'); // 中国时区
    $sqlstr = "insert into article(cid,type,title,content,timeline,img) values('1','".$type."','".$title."','".$content."','".date('Y-m-d H:i:s')."','".$image."')";  
    @mysql_query($sqlstr) or die(mysql_error());  
  
   return ajax_echo('添加成功');  
    exit();  
      }else{
      	return ajax_echo('存储失败');
      }
     
}
/*添加图片*/
function addphoto(){
// 连接数据库  
$conn=@mysql_connect("localhost","root","")  or die(mysql_error());  
@mysql_select_db('fat',$conn) or die(mysql_error());  
	$title = _post('title');
    $image =mysql_real_escape_string(file_get_contents($_FILES['photo']['tmp_name']),$conn);  
    $type = $_FILES['photo']['type'];
    //检测图片大小
    $max_file_size=2*1024*1024; 
    $file_size=$_FILES['photo']['size'];
    if($file_size>$max_file_size) 
		return ajax_echo('文件太大') ;
	//上传至upload文件夹
	if (file_exists("../upload/" . $_FILES["photo"]["name"]))
      {
      return ajax_echo('本图片已经存在');
      }
    elseif(move_uploaded_file($_FILES["photo"]["tmp_name"],
      "../upload/" . $_FILES["photo"]["name"]))
      {
     //图片插入数据库
    $sqlstr = "insert into photo(cid,type,title,binarydata) values('1','".$type."','".$title."','".$image."')";  
    @mysql_query($sqlstr) or die(mysql_error());  
  
   return ajax_echo('添加成功');  
    exit();  
      }else{
      	return ajax_echo('存储失败');
      }
     
}
//用户管理
function get_user_by_type( $type=0 )
{
    if($type==0){
        $sql = "SELECT * FROM `user` WHERE `level`>=0 ";
        }else{
    $sql = "SELECT * FROM `user` WHERE `level` = '" . s( $type ) . "'";}
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}
function del_user(){
	if($id=_get('id')){
		$sql = "DELETE FROM `user` WHERE `user_id`='".$id."'";
		run_sql( $sql );		
	}
	return ajax_echo('删除成功');
}
/*--------------SEO内容管理---------------*/
/*更改SEO关键词，描述*/
function edit_seo(){
    if($id=_post('id')){
        if(update_article($id,_post('description'),_post('keywords'))>0){
            return ajax_echo('更新成功');
        }
    }
}
function update_seo($id,$description,$keywords)
{
    $sql = "UPDATE `seo` SET `description`='".($description)."', `keywords`='".($keywords)."'WHERE `id`='".intval($id)."'";
    return run_sql( $sql );
}


