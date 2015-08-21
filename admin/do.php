<?php 
include_once('../lib/common.function.php' );
if($f=_get('a')){
if($f!='adminlogin')check_admin();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('b')){
if($f!='save_admin')save_admin();
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
if($f!='del_index_content')del_index_content();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('e')){
if($f!='edit_index_content')edit_index_content();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('f')){
if($f!='index_content_add_vector')index_content_add_vector();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('g')){
if($f!='index_content_add')index_content_add();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('h')){
if($f!='del_pic_content')del_pic_content();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('i')){
if($f!='addphoto')addphoto();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('j')){
if($f!='del_article')del_article();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('k')){
if($f!='edit_article')edit_article();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('l')){
if($f!='addarticle')addarticle();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('m')){
if($f!='del_comment')del_comment();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('n')){
if($f!='del_user')del_user();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
if($f=_get('o')){
if($f!='edit_seo')edit_seo();
if(function_exists ($f)){
	call_user_func($f);	
}else{
	return ajax_echo('no method:'.$f);
}
}
 ?>