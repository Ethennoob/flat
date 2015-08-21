<?php
@session_start();
define( 'DS' , DIRECTORY_SEPARATOR );
define( 'AROOT' , dirname( __FILE__ ) . DS  );
include_once(AROOT.'db.function.php' );
include_once(AROOT.'admin.function.php' );

function _post( $str )
{
	return isset( $_POST[$str] ) ? $_POST[$str] : null;
}

function _get( $str )
{
	return isset( $_GET[$str] ) ? $_GET[$str] : null;
}
function logout()
{
    foreach( $_SESSION as $key=>$value )
    {
        unset( $_SESSION[$key] );
    }
    
    forward('./login.php');
}

//用户登陆注册
function is_user()
{
	return $_SESSION['level'] == 1;
}

function check_user()
{
	if(!is_user()){
		forward('login.php');
		exit;
	}
}
function user_name(){
	return @$_SESSION['username'];	
}
function add_user($username,$email,$password){

    $sql = "INSERT INTO user (username, email,password,level)VALUES ('".s($username)."','".s($email)."','".s($password)."','1')";
    return run_sql( $sql );
}
function user_add(){
    $code = _post('code');
    if ($_SESSION['code']==$code) { 
    if(add_user(trim(@mysql_real_escape_string(_post('username'))),@mysql_real_escape_string(_post('email')),md5(@mysql_real_escape_string(_post('password'))),'')>0){
        return ajax_echo('注册成功');
    }
    }else{
        return ajax_echo('验证码错误');
    }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
function login(){
	$u=@mysql_real_escape_string(_post('username'));
	$p=md5(@mysql_real_escape_string(_post('password')));
	if(!($u&&$p)) return false;
	if($userinfo=get_user_info_by_u_p($u,$p)){
		@session_start();
		foreach( $userinfo as $key => $value ){
			$_SESSION[$key] = $value;
		}
		echo "<script>window.location.href='index.php';</script>";
	}else{
		return ajax_echo('用户名或密码错误');
	}
}
function get_user_info_by_u_p($u,$p){
   $sql = "SELECT * FROM `user` WHERE `username` = '" . s( $u ) . "' LIMIT 1";
    if(!$line = get_line( $sql )) return false;
    $ret = false;
    $passwordv2=($p);
    if( $passwordv2== $line['password'] )
    {
        $ret = $line;
    }
    return $ret; 
}
function get_user_info_by_id($id){
	$sql = "SELECT * FROM `user` WHERE `id` = '" . intval( $id ) . "' LIMIT 1";
	if($line = get_line( $sql )){
		return $line;	
	}
	return false;
}
//-------------首页信息添加-----------------
//-------------头版标题-----------------
function get_index_title1_by_id()
{
    $sql = "SELECT * FROM `index-content` WHERE `cid` = '1' LIMIT 1";
    if($line = get_line( $sql )){
        return $line;
    }else{
        return false; 
    }
}
function get_index_content_by_type( $type=0 )
{
    if($type==0){
        $sql = "SELECT * FROM `index-content` WHERE `cid`>=0 ";
        }else{
    $sql = "SELECT * FROM `index-content` WHERE `cid` = '" . s( $type ) . "'";}
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}
function get_article_by_type( $type=0 )
{
    if($type==0){
        $sql = "SELECT * FROM `article` WHERE `cid`>=0 ";
        }else{
    $sql = "SELECT * FROM `article` WHERE `cid` = '" . s( $type ) . "'";}
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}
function get_picshow_by_type( $type=0 )
{
    if($type==0){
        $sql = "SELECT * FROM `photo` WHERE `cid`>=0 ";
        }else{
    $sql = "SELECT * FROM `photo` WHERE `cid` = '" . s( $type ) . "'";}
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}
function get_seo_by_type( $type=0 )
{
    if($type==0){
        $sql = "SELECT * FROM `seo` WHERE `cid`>=0 ";
        }else{
    $sql = "SELECT * FROM `seo` WHERE `cid` = '" . s( $type ) . "'";}
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}
function get_index_content_by_id( $id,$cid='and cid<10' )
{
    if($id==null)return false;
    $sql = "SELECT * FROM `index-content` WHERE `id` = '" . s( $id ) . "' ".$cid." LIMIT 1";
    if($line = get_line( $sql )){
        return $line;
    }else{
        return false; 
    }
}
function get_article_by_id( $id,$cid='and cid<10' )
{
    if($id==null)return false;
    $sql = "SELECT * FROM `article` WHERE `id` = '" . s( $id ) . "' ".$cid." LIMIT 1";
    if($line = get_line( $sql )){
        return $line;
    }else{
        return false; 
    }
}

//搜索
function get_search_by_type()
{
    $subject = _get('q');
    $subject= @mysql_real_escape_string(trim($subject));
if (!$subject)
{
return ajax_echo('搜索框不能为空');
}
    $sql = "SELECT * FROM `article` WHERE `title` LIKE '%" .$subject. "%'";
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}

/*评论页面*/
function get_comment_by_type( $type=0 )
{
    if($type==0){
        $sql = "SELECT * FROM `comment` WHERE `tid`>=0 ";
        }else{
    $sql = "SELECT * FROM `comment` WHERE `tid` = '" . s( $type ) . "'";}
    if($data = get_data( $sql )){
        return $data;
    }else{
        return false; 
    }
}

function comment_add(){
    date_default_timezone_set('PRC'); // 中国时区
    if(add_comment(user_name(),_post('content'),date('Y-m-d H:i:s'),_post('tid'))>0){
        return ajax_echo('评论成功');
        }
}

function add_comment($username,$content,$timeline,$tid){
    $sql="INSERT INTO `comment`(username,content,timeline,tid,cid) VALUES ('".($username)."','".($content)."','".($timeline)."','".($tid)."','0')";
    return run_sql( $sql );
}

//其他
function forward( $url )
{
	header( "Location: " . $url );
}

function jsforword( $url )
{
	return '<script>window.location.href="'.$url.'";</script>';
}


function ajax_header( $type = 'text/html' )
{
	if( !headers_sent() )
	{
		header("Content-Type:".$type.";charset=utf-8");
		header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");
	}
}

function ajax_echo( $info )
{
	ajax_header();
	echo "<script>alert('$info');window.history.back();</script>";
}

function fileext($file)
{
    return pathinfo($file, PATHINFO_EXTENSION);
}


?>