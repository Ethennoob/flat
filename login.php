<?php 
include('./lib/common.function.php' );?>
<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8" />
        <title>登陆 - Designmodo</title>
<?php include_once('inc-SEO.php');?>
<link href="favicon.ico" type="image/ico" rel="shortcut icon">
<link rel='stylesheet' id='mediaelement-css'  href='assets/js/mediaelement/mediaelementplayer.min.css?ver=2.16.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='assets/js/mediaelement/wp-mediaelement.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='smart-coupon-css'  href='assets/plugins/woocommerce-smart-coupons/assets/css/smart-coupon.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='dm_style-css'  href='assets/themes/designmodov2.1/style.css?t=1431949177' type='text/css' media='all' />
<link rel='stylesheet' id='et_bloom-css-css'  href='assets/plugins/bloom/css/style.css?ver=1.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp-css'  href='assets/plugins/woochimp/assets/css/style.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp_skin_2-css'  href='assets/plugins/woochimp/assets/css/skins/woochimp_skin_2.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='follow-up-emails-css'  href='assets/plugins/woocommerce-follow-up-emails/templates/followups.css?ver=4.1.8' type='text/css' media='all' />
<script type='text/javascript' src='assets/js/jquery/jquery.js?ver=1.11.2'></script>
<script type='text/javascript' src='assets/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/mobile-nav.js?ver=1.0'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/modernizr.custom.79881.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/common.js?t=1431949177'></script>
<script type='text/javascript' src='assets/plugins/woochimp/assets/js/woochimp-frontend.js?ver=1.4.3'></script>

</head>

<body class="page page-id-97140 page-child parent-pageid-92270 page-template page-template-page-sign-in page-template-page-sign-in-php et_bloom">
    <?php include_once('inc-nav.php');?>
    <div id="header-wrapper">
        <div id="logo">
            <a class="main-logo" href="index.php" title="Designmodo &#8211; Web Design Blog and Shop"></a>
        </div><!--end logo-->

        	
    </div><!--end header-wrapper-->

    <div id="main-wrapper">

    <div id="content-wrapper">
        <div style="clear:both;"></div>

        <div class="green-full-width Sign In">

            
                    <h1>登陆</h1>

                    
                    
                    <div class="content-body">
                        <form method="post" action="do.php?a=login" class="login">
                            <p class="form-row form-row-wide">
                                <label for="username">用户名:</label>
                                <input type="text" class="input-text" name="username" id="username" tabindex="1"/>
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="password" class="sign_pw">密码:</label>
                                <input class="input-text" type="password" name="password" id="password" tabindex="2"/>
                            </p>
                            <div class="clear"></div>

                            <p class="form-row login_form">
                        <input type="submit" class="button" name="login" value="登陆" />
				<a class="button register_button" href="reg.php">注册</a>
                            </p>
                        </form>
                    </div>

                            </div>
        <ul class="account-extra">
        <?php $records=get_index_content_by_type(19);
        if(is_array($records))    //add
   {  
                    foreach($records as $rs){
                        ?>
                        <li class="col-1">
                        <h3><?php echo $rs['title'];?></h3>
                        <p><?php echo $rs['content'];?></p>
                        </li>
        <?php }};?>
        </ul>     
        </div>
</div><!-- end main-wrapper -->
<?php include_once('inc-foot.php');?>
</body>
</html>

