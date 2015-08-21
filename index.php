<?php 
include('./lib/common.function.php' );
$title1=get_index_title1_by_id();?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <title>胖子 UI Pro- Bootstrap 设计框架 - Designmodo</title> 
<?php include_once('inc-SEO.php');?>
<link href="favicon.ico" type="image/ico" rel="shortcut icon">
<link rel='stylesheet' id='mediaelement-css'  href='assets/js/mediaelement/mediaelementplayer.min.css?ver=2.16.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='assets/js/mediaelement/wp-mediaelement.css?ver=4.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='smart-coupon-css'  href='assets/plugins/woocommerce-smart-coupons/assets/css/smart-coupon.css?ver=4.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='dm_style-css'  href='assets/themes/designmodov2.1/style.css?t=1430889236' type='text/css' media='all' />

<link rel='stylesheet' id='et_bloom-css-css'  href='assets/plugins/bloom/css/style.css?ver=1.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp-css'  href='assets/plugins/woochimp/assets/css/style.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp_skin_2-css'  href='assets/plugins/woochimp/assets/css/skins/woochimp_skin_2.css?ver=4.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='follow-up-emails-css'  href='assets/plugins/woocommerce-follow-up-emails/templates/followups.css?ver=4.1.7' type='text/css' media='all' />

<link rel='stylesheet' id='dm_shop_flat_css-css'  href='assets/themes/designmodov2.1/flat-ui/css/all.css' type='text/css' media='all' />
<script type='text/javascript' src='assets/js/jquery/jquery.js?ver=1.11.2'></script>
<script type='text/javascript' src='assets/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/mobile-nav.js?ver=1.0'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/modernizr.custom.79881.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/common.js?t=1430889236'></script>
<script type='text/javascript' src='assets/plugins/woochimp/assets/js/woochimp-frontend.js?ver=1.4.3'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/custom-pages/startup-wordpress/presentation/MyFontsWebfontsKit.js'></script>

 --><script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/main-v2.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/easing.min.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/jquery.svg.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/jquery.svganim.js'></script>

</head>

<body class="single single-post postid-95873 single-format-standard et_bloom post-flat">
    <?php include_once('inc-nav.php');?>

    <div id="header-wrapper">
       <div id="logo">
           <a class="main-logo" href="index.php" title="Designmodo &#8211; Web Design Blog and Shop"></a>
       </div><!-- end logo -->
   
           
   </div><!-- end header-wrapper  -->

    <div id="main-wrapper">

<div id="wrapper">

    <article id="main">
        <section class="promo-section">
            <div class="holder">
                <h1><?php echo $title1['title'];?></h1>
                <p><?php echo $title1['content'];?></p>
                <a href="Flat-UI/index.html" class="btn">查看UI demo</a>
            </div>
        </section>
        <a id="all-elements" class="zoomify" target="_blank" href="#">
            <span class="elem-section">
                <span class="holder">
                    <span class="frame">
                    <?php $records=get_index_content_by_type(2);
                    if(is_array($records))    //add
   {  
                    foreach($records as $rs){
                        ?>
                        <h2><?php echo $rs['title'];?></h2>
                        <p><?php echo $rs['content'];?></p>
                        <?php }};?>
                    </span>
                </span>
                <span class="elements-nav">
                    <img src="assets/themes/designmodov2.1/flat-ui/images/all-elelemtns-thumb.png" alt="Basic Elements" width="552" height="408">
                    <img src="assets/themes/designmodov2.1/flat-ui/images/eye-icon.png" class="icon">
                </span>
                <div class="buttonholder">
                    <span class="fakeButton">View All Elements (2 Mb)</span>
                </div>
            </span>
        </a>
        <section class="item-section">
            <div class="holder">
                <ul class="item-list">
                        <?php $records=get_index_content_by_type(3);
                        if(is_array($records))    //add
   {  
                    foreach($records as $rs){
                        ?>
                        <li>
                        <div class='visual'>
                        <span class='svg'>
                          <?php echo $rs['vectorpic'];?>
                        </span>
                        </div>
                        <div class="frame">
                            <h3><?php echo $rs['title'];?></h3>
                            <p><?php echo $rs['content'];?></p>
                        </div>
                    </li>
                    <?php }};?>
                </ul>
            </div>
         <!-- 待开发中   --> 
        </section>
        <section class="base-section">
 
        </section>
        <section class="icon-section">
            
        </section>
        <section class="swatch-section">
            
        </section>
        <section class="prototype-section">
            
        </section>
        <section class="responsive-section">

        </section> 
        <section class="grab-section" id="buy">
           
        </section>
        <section class="share-section">
           
        </section>
         <!-- 待开发中   -->
    </article>
</div>



<div style="clear:both;"></div>
<div id="content-wrapper">
    <div style="clear:both;"></div>

    <!--//////////-->

    <div class="sidebar-container" style="float:right;" id="buynow">
        <div class="sidebar-wrapper shop-info">

            
            <div id="rightbox buynow-buttons">
                <div class="support-banner" id="support">
                    <h1>对产品有疑惑？</h1>
                    <p>我们将很高兴为您解决问题。我们要使我们的产品更好，很快我们将发布一些新版本.</p>
                    <p><a href="contact.php" target="_blank">回答问题 ➜</a></p>
                </div>
                <div class="rightbox">
                    <h2 class="top-shop">Details</h2>
                    <ul class="info">
                    <?php $records=get_index_content_by_type(4);
                    if(is_array($records))    //add
   {  
                    foreach($records as $rs){
                        ?>
                        <li><?php echo $rs['title']; ?><span><?php echo $rs['content']; ?></span></li>
                       <?php }};?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="articles-container" style="float:left">
        <div>
            <div style="clear:both;"></div> 
            </div><!--end article-single-->
            <div style="clear:both;"></div>


    <div class="comments-wrapper flat-comments-wrapper">
        <div class="slide_wrapper">
            <img src="assets/themes/designmodov2.1/flat-ui/images/join-conversation.png" class="join_conversation" />

            <br clear="all"/>
            <a id="flat_ui_comments_trigger" href="contact.php" data-post-id="95873" data-cpage="">加入讨论</a>

            <br clear="all"/>
        </div>
    </div>
    </div><!--end articles container-->
    <div style="clear:both;"></div>
    </div><!--end content-wrapper-->
    </div><!-- end main-wrapper -->
<?php include_once('inc-foot.php');?>

</body>
</html>
