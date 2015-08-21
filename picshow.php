<?php 
include('./lib/common.function.php' );
// 判断action  
$action = isset($_REQUEST['action'])? $_REQUEST['action'] : '';  ?>
<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8" />
        <title>胖子 UI Pro 展示- Bootstrap 设计框架 - Designmodo</title>           
<?php include_once('inc-SEO.php');?>
<link href="favicon.ico" type="image/ico" rel="shortcut icon">
<link rel='stylesheet' id='mediaelement-css'  href='wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=2.16.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='wp-includes/js/mediaelement/wp-mediaelement.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='smart-coupon-css'  href='wp-content/plugins/woocommerce-smart-coupons/assets/css/smart-coupon.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='dm_style-css'  href='wp-content/themes/designmodov2.1/style.css?t=1432640923' type='text/css' media='all' />
<link rel='stylesheet' id='et_bloom-open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' type='text/css' media='all' />
<link rel='stylesheet' id='et_bloom-css-css'  href='wp-content/plugins/bloom/css/style.css?ver=1.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='top-stories-css'  href='wp-content/plugins/top-stories/css/style.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp-css'  href='wp-content/plugins/woochimp/assets/css/style.css?ver=1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='woochimp_skin_2-css'  href='wp-content/plugins/woochimp/assets/css/skins/woochimp_skin_2.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='follow-up-emails-css'  href='wp-content/plugins/woocommerce-follow-up-emails/templates/followups.css?ver=4.1.9' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='wp-content/themes/designmodov2.1/js/mobile-nav.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/designmodov2.1/js/modernizr.custom.79881.js'></script>
<script type='text/javascript' src='wp-content/themes/designmodov2.1/js/common.js?t=1432640923'></script>
<script type='text/javascript' src='wp-content/plugins/woochimp/assets/js/woochimp-frontend.js?ver=1.4.3'></script>
<script type='text/javascript' src='wp-content/themes/designmodov2.1/custom-pages/startup-wordpress/presentation/MyFontsWebfontsKit.js'></script>


       
</head>

<body class="archive category category-shop category-15533 et_bloom">
    <?php include_once('inc-nav.php');?>

    <div id="main-wrapper">

<div id="content-wrapper" style="min-height: 710px!important;">
    <div style="clear:both;"></div>

    <!-- content -->
    <div class="content-shop">
        <div class="header">
         <?php $records=get_index_content_by_type(25);
         if(is_array($records))    //add
   {  
          foreach($records as $rs){
         ?>
            <h1 class="tagline2"><?php echo $rs['title']; ?></h1>
            <h2 class="tagline1"><?php echo $rs['content']; ?></h2>
            <?php }};?>
        </div>
        <div class="shop-menu">
        <?php $records=get_index_content_by_type(26);
        if(is_array($records))    //add
   {  
          foreach($records as $rs){?>
            <a href="#"><?php echo $rs['title']; ?></a>•<a href="reg.php"><?php echo $rs['content']; ?></a><!--•<a href="#">FAQ</a>-->
            <?php }};?>
             </div>
        <div class="grid-view">
            <ul>
            <?php $records=get_picshow_by_type(1);
            if(is_array($records))    //add
   {  
          foreach(array_reverse($records) as $rs){?>
                <li>
                    <div class="archives-thumbs-shop">
                        <a class="shop-picture" href="#" title="<?php echo $rs['title']; ?>"><img src="do.php?action=show&id=<?php echo $rs['id']."&".time();?>" alt="><?php echo $rs['title']; ?>" width="270" height="180" /><span class="new"></span></a>
                        <div class="shop-title"><a href="#"><?php echo $rs['title']; ?></a></div>
                    </div>
                </li>
                <?php }};?>  
             </ul>
            <div class="clear"></div>
        </div>
    </div>
    <div style="clear:both;"></div>
    <!--/ content -->

    <div class="top-shop">
        <div class="tagline1">designmodo产品.</div>
    </div>

    <div style="clear:both;"></div>
    <div style="clear:both;"></div>
</div><!--end content-wrapper-->
</div><!-- end main-wrapper -->

<?php include_once('inc-foot.php');?>
</body>
</html>
