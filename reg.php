<?php 
include('./lib/common.function.php' );?>

<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8" />
        <title>注册 - Designmodo</title>
<?php include_once('inc-SEO.php');?>
<link href="favicon.ico" type="image/ico" rel="shortcut icon">
<link rel='stylesheet' id='mediaelement-css'  href='assets/js/mediaelement/mediaelementplayer.min.css?ver=2.16.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='assets/js/mediaelement/wp-mediaelement.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='smart-coupon-css'  href='assets/plugins/woocommerce-smart-coupons/assets/css/smart-coupon.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='dm_style-css'  href='assets/themes/designmodov2.1/style.css?t=1431945886' type='text/css' media='all' />
<link rel='stylesheet' id='et_bloom-open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' type='text/css' media='all' />
<link rel='stylesheet' id='et_bloom-css-css'  href='assets/plugins/bloom/css/style.css?ver=1.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp-css'  href='assets/plugins/woochimp/assets/css/style.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp_skin_2-css'  href='assets/plugins/woochimp/assets/css/skins/woochimp_skin_2.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='follow-up-emails-css'  href='assets/plugins/woocommerce-follow-up-emails/templates/followups.css?ver=4.1.8' type='text/css' media='all' />
<link rel="stylesheet" type="text/css" href="assets/plugins/bloom/css/bootstrapValidator.css">

<script type='text/javascript' src='assets/js/jquery/jquery.js?ver=1.11.2'></script>
<script type='text/javascript' src='assets/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>

<script type='text/javascript' src='assets/themes/designmodov2.1/js/modernizr.custom.79881.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/common.js?t=1431945886'></script>
<script type='text/javascript' src='assets/plugins/woochimp/assets/js/woochimp-frontend.js?ver=1.4.3'></script>
<script type="text/javascript" src="assets/plugins/bloom/js/bootstrapValidator.js"></script>
<script type="text/javascript" src="assets/plugins/bloom/js/signup.js"></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/custom-pages/startup-wordpress/presentation/MyFontsWebfontsKit.js'></script>

    <script type="text/javascript">
  var pass1 ,pass2 ; //存放两次密码
  var flag = false ; // 标志是否提交表单
 /* function cls0(){
      var val = document.myform.mainMail.value ;
      if(val == "请输入邮件地址"){
      document.myform.mainMail.value = "";
      }
     document.myform.mainMail.focus();
   }*/

 function doAction0()
 {
    var email  = document.myform.email.value ;
    var  reg = /^[0-9a-zA-Z_]+@[0-9a-zA-Z]+[\.]{1}[0-9a-zA-Z]+[\.]?[0-9a-zA-Z]+$/;
     if(!reg.test(email))
   {
     document.getElementById("td0").innerHTML="<font color = red>邮件地址不符合要求</font>";
     document.myform.email.select();
     flag = false ;
   }
   else 
   {
      document.getElementById("td0").innerHTML="<font color = green>邮件地址格式正确</font>";
      flag = true ;
   }
    
   }
    function doAction3()
 {
      username  = document.myform.username.value ;
     var reg1 = /^[a-zA-Z]{1}[0-9a-zA-Z_]{1,15}$/ ;
     if(!reg1.test(username))
   {
     document.getElementById("td").innerHTML="<font color = red>用户名只允许英文开头，不能超过16个字符</font>";
     document.myform.username.select();
     flag = false ;
   }else 
   {
      document.getElementById("td").innerHTML="<font color = green>用户名符合要求</font>";
      flag = true ;
    }
  } 
 function doAction1()
 {
      pass1  = document.myform.password.value ;
     var reg1 = /\d{6,12}/;
     if(!reg1.test(pass1))
   {
     document.getElementById("td1").innerHTML="<font color = red>密码必须6-12位</font>";
     flag = false ;
   }else 
   {
      document.getElementById("td1").innerHTML="<font color = green>密码格式符合要求</font>";
      flag = true ;
    }
  }
  function doAction2()
 {
      pass2  = document.myform.password2.value ;
    pass1  = document.myform.password.value ;
     
     if(pass2!=pass1)
   {
     document.getElementById("td2").innerHTML="<font color = red>确认密码与密码不符</font>";
     flag = false ;
   }else 
   {
      document.getElementById("td2").innerHTML="<font color = green>确认密码格式符合要求</font>";
      flag = true ;
    }
  }

 
  function changeCode()
  {
     if(event.keyCode == 13 )
     {
         event.keyCode = 9 ;
      }
  }
  
  function check(){   
      return flag ;
  }
  document.onkeydown = changeCode;
</script>
</head>

<body class="page page-id-97138 page-template page-template-page-register page-template-page-register-php et_bloom">
  <?php include_once('inc-nav.php');?>

    

    <div id="header-wrapper">
        <div id="logo">
            <a class="main-logo" href="index.php" title="Designmodo &#8211; Web Design Blog and Shop"></a>
        </div><!--end logo-->

        	
    </div><!--end header-wrapper-->

    <div id="main-wrapper">


    <div id="content-wrapper">
        <div style="clear:both;"></div>

        <div class="green-full-width Registration">

            
                    <h1>欢迎注册</h1>


                    <div class="content-body">
                        <form name="myform" method="post" action="do.php?b=user_add" class="register" onSubmit="return check()">
                               <p class="form-row form-row-wide form-group">
                                    <label>用户名:</label>
                                    <input type="text" class="input-text" onBlur="doAction3()"  name="username" placeholder="username"/>
                                    <span width="100"id="td">必须以英文字母开头</span>
                                </p> 

                            <p class="form-row form-row-wide form-group">
                                <label>Email: </label>
                                <input type="email" onBlur="doAction0()" class="input-text" name="email" onBlur="doAction0()"  placeholder="E-mail" id="reg_email" />
                           <span width="100"id="td0">请正确填写邮箱</span>
                            </p>

                            <div class="clear"></div>

                            <p class="form-row form-row-first form-group">
                                <label>密码: </label>
                                <input type="password" onBlur="doAction1()"  class="input-text" name="password" placeholder="password" id="reg_password" value="" />
                            <span id="td1">密码至少是6位数字</span>
                            </p>
                            <p class="form-row form-row-last form-group">
                                <label>确认密码:</label>
                                <input type="password" onBlur="doAction2()" class="input-text" name="password2" placeholder="confirm Pwd" id="reg_password2" value="" />
                            <span id="td2"></span>
                            </p>
                            <p class="form-row form-row-first form-group">
                                <label>验证码: </label>
                                <input type="text" name="code" class="input-text" />
                            </p>
                            <p class="form-row form-row-last form-group" style="position: relative;">
                                <img style="width:190px;height: 52px;position: absolute;top: 33px;"  title="点击刷新" src="lib/captcha.php" align="absbottom" onclick="this.src='lib/captcha.php?'+Math.random();">
                            </p>
                            <div class="clear"></div>

                          
                            
                            <p class="form-row">
                                <input type="submit" class="button"  value="注册" />
                             
                            </p>

                        </form>
                    </div>
        </div>
        <ul class="account-extra">
        <?php $records=get_index_content_by_type(19);
                    foreach($records as $rs){
                        ?>
                        <li class="col-1">
                        <h3><?php echo $rs['title'];?></h3>
                        <p><?php echo $rs['content'];?></p>
                        </li>
        <?php };?>
        </ul>      </div>

    </div><!-- end main-wrapper -->

<?php include_once('inc-foot.php');?>
</body>
</html>    
