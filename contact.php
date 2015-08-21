<?php 
include('./lib/common.function.php' );?>
<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8" />

       <title>胖子 UI Pro 交流- Bootstrap 设计框架 - Designmodo</title>   
<?php include_once('inc-SEO.php');?>
<link href="favicon.ico" type="image/ico" rel="shortcut icon">
<link rel='stylesheet' id='mediaelement-css'  href='assets/js/mediaelement/mediaelementplayer.min.css?ver=2.16.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='assets/js/mediaelement/wp-mediaelement.css?ver=4.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='smart-coupon-css'  href='assets/plugins/woocommerce-smart-coupons/assets/css/smart-coupon.css?ver=4.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='dm_style-css'  href='assets/themes/designmodov2.1/style.css?t=1430889236' type='text/css' media='all' />
<link rel='stylesheet' id='et_bloom-open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' type='text/css' media='all' />
<link rel='stylesheet' id='et_bloom-css-css'  href='assets/plugins/bloom/css/style.css?ver=1.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp-css'  href='assets/plugins/woochimp/assets/css/style.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp_skin_2-css'  href='assets/plugins/woochimp/assets/css/skins/woochimp_skin_2.css?ver=4.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='follow-up-emails-css'  href='assets/plugins/woocommerce-follow-up-emails/templates/followups.css?ver=4.1.7' type='text/css' media='all' />
<link rel='stylesheet' id='dm_shop_flat_fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:400,700,900' type='text/css' media='all' />
<link rel='stylesheet' id='dm_shop_flat_css-css'  href='assets/themes/designmodov2.1/flat-ui/css/all.css' type='text/css' media='all' />
<script type='text/javascript' src='assets/js/jquery/jquery.js?ver=1.11.2'></script>
<script type='text/javascript' src='assets/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/mobile-nav.js?ver=1.0'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/modernizr.custom.79881.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/js/common.js?t=1430889236'></script>
<script type='text/javascript' src='assets/plugins/woochimp/assets/js/woochimp-frontend.js?ver=1.4.3'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/custom-pages/startup-wordpress/presentation/MyFontsWebfontsKit.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/main-v2.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/easing.min.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/jquery.svg.js'></script>
<script type='text/javascript' src='assets/themes/designmodov2.1/flat-ui/js/jquery.svganim.js'></script>


</head>

<body>
    <?php include_once('inc-nav.php');?>
    <div id="header-wrapper">
       <div id="logo">
           <a class="main-logo" href="index.php" title="Designmodo &#8211; Web Design Blog and Shop"></a>
       </div><!-- end logo -->
   
           
   </div><!-- end header-wrapper  -->
<div id="main-wrapper">

<div id="content-wrapper">
    <!-- <div style="clear:both;"></div> -->

    <div class="articles-container">
    <h1 class="catname">
        <span>交流</span>
    </h1><!--end catname-->
        <ul class="categories-container">
    <?php $records=get_article_by_type(1);
    if(is_array($records))    //add
   {  
    foreach(array_reverse($records) as $rs){
    ?>
                    <li>
                        <div class="archives-thumb">
                        <a href="article.php?id=<?php echo $rs['id'];?>">
                        <img width="424" height="113" src="do.php?arti=show&id=<?php echo $rs['id']."&".time();?>" class="attachment-category wp-post-image"/>
                        </a>
                               
                        </div><!--end archives-thumb-->

                        <h2><a href="article.php?id=<?php echo $rs['id'];?>"><?php echo $rs['title'];?></a></h2>

                        <div class="archives-meta">&nbsp;&nbsp;•&nbsp;&nbsp;<?php echo $rs['timeline']; ?></div>

                        <p><?php echo mb_substr($rs['content'],0,60,'UTF-8');?>...</p>

                        <div style="clear:both;"></div> 
                    </li> 
                    <?php }};?>
                    <li>               
        </ul>
    </div><!--end articles container-->
    <div class="sidebar-container">
    <h3 class="top-shop">我们的产品<a href="picshow.php">更多</a></h3>
    <ul class="shop-container">
        <?php $records=get_picshow_by_type(1);
        if(is_array($records))    //add
   {  
          foreach($records as $rs){?>
                <li>
            <a href="picshow.php">
                <img src="do.php?action=show&id=<?php echo $rs['id']."&".time();?>" alt="><?php echo $rs['title']; ?>" width="180" height="100" />
                <span>DESIGN FRAMEWORK</span>
                <strong><?php echo $rs['title']; ?></strong>
            </a>
        </li> 
        <?php }};?>                    
        
    </ul>

</div> 
<div style="clear:both;"></div>
</div><!--end content-wrapper-->
</div><!-- end main-wrapper -->
 <div style="clear:both;"></div> 

<?php include_once('inc-foot.php');?>


</body>
</html>

