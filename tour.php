<?php 
include('./lib/common.function.php' );?>
<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8" />
        <title>胖子 UI Pro- Bootstrap 设计框架 - Designmodo</title> 
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

<body class="single single-post postid-95873 single-format-standard et_bloom post-flat">
<?php include_once('inc-nav.php');?>
<div style="height:45px;"></div>
<div id="main-wrapper">
<div id="wrapper">

    <article id="main">
        <section class="promo-section">
            
        </section>
       
        <section class="item-section">
        </section>
        <section class="base-section">
            <div class="holder">
             <?php $records=get_index_content_by_type(10);
             foreach($records as $rs){
                ?>
                <h2><?php echo $rs['title'];?></h2>
                <p><?php echo $rs['content'];?></p>
                <?php };?>
                <ul class="list">
                <?php $records=get_index_content_by_type(11);
                foreach($records as $rs){ ?>    
                    <li>
                        <h3><?php echo $rs['title'];?></h3>
                        <p><?php echo $rs['content'];?></p>
                    </li>
                    <?php };?>
                </ul>
            </div>
        </section>
        <section class="icon-section">
            <div class="holder">
                <div class="frame">
                    <div class="text">
                    <?php $records=get_index_content_by_type(12);foreach($records as $rs){?>
                <h2><?php echo $rs['title'];?></h2>
                <p><?php echo $rs['content'];?></p>
                <?php };?>
                <ul class="image-list">
                            <li><a href="assets/themes/designmodov2.1/flat-ui/images/2.Icons-Pack@2x.png" data="1000" class="zoomify"><img src="assets/themes/designmodov2.1/flat-ui/images/img-2.png" alt="image description" width="138"></a></li>
                            <li><a href="assets/themes/designmodov2.1/flat-ui/images/3.Glyphs@2x.png" data="1100" class="zoomify"><img src="assets/themes/designmodov2.1/flat-ui/images/img-3.png" alt="image description" width="138"></a></li>
                        </ul>
                    </div>
                    <img id="icon-heart" src="assets/themes/designmodov2.1/flat-ui/images/img-1.png" width="472" alt="Icons & Glyphs">
                </div>
                <ul class="list">
                   <?php $records=get_index_content_by_type(13);
                foreach($records as $rs){ ?>    
                    <li>
                        <h3><?php echo $rs['title'];?></h3>
                        <p><?php echo $rs['content'];?></p>
                    </li>
                    <?php };?>
                </ul>
            </div>
        </section>
        <section class="swatch-section">
            <div class="holder">
                <img id="colorful-icon" src="assets/themes/designmodov2.1/flat-ui/images/img-4.png" alt="Vector Icons with your custom colors" style="background-color:rgb(245, 245, 245)" width="400" height="400">
                <div class="frame">
                    <?php $records=get_index_content_by_type(14);foreach($records as $rs){?>
                <h2><?php echo $rs['title'];?></h2>
                <p><?php echo $rs['content'];?></p>
                <?php };?>
                <ul class="color-list">
                        <li class="selected"><span class="color-1">color-1</span></li>
                        <li><span class="color-2">color-2</span></li>
                        <li><span class="color-3">color-3</span></li>
                        <li><span class="color-4">color-4</span></li>
                        <li><span class="color-5">color-5</span></li>
                        <li><span class="color-6">color-6</span></li>
                        <li><span class="color-7">color-7</span></li>
                        <li><span class="color-8">color-8</span></li>
                        <li><span class="color-9">color-9</span></li>
                        <li><span class="color-10">color-10</span></li>
                    </ul>
                    <div class="block">
                        <img src="assets/themes/designmodov2.1/flat-ui/images/img-5.png" alt="image description">
                        <div class="block-frame">
                <?php $records=get_index_content_by_type(15);foreach($records as $rs){?>
                <h2><?php echo $rs['title'];?></h2>
                <p><?php echo $rs['content'];?></p>
                <?php };?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="prototype-section">
            <div class="holder">
                <div class="pr-block">
                    <div id="pr-site">
                        <span class="pr-site-element1">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-site-element1.png" alt="element">
                        </span>
                        <span class="pr-site-element3">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-site-element3.png" alt="element">
                        </span>
                        <span class="pr-site-element2">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-site-element2.png" alt="element">
                        </span>
                        <span class="pr-site-element4">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-site-element4.png" alt="element">
                        </span>
                        <span class="pr-site-element5">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-site-element5.png" alt="element">
                        </span>
                        <span class="pr-site-element6">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-site-element6.png" alt="element">
                        </span>
                        <span class="pr-site-element7">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-site-element7.png" alt="element">
                        </span>
                    </div>
                    <div id="pr-page" class="hidden">
                        <span class="pr-page-element1">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-page-element1.png" alt="element">
                        </span>
                        <span class="pr-page-element2">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-page-element2.png" alt="element">
                        </span>
                        <span class="pr-page-element3">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-page-element3.png" alt="element">
                        </span>
                        <span class="pr-page-element4">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-page-element4.png" alt="element">
                        </span>
                    </div>
                    <div id="pr-blog" class="hidden">
                        <span class="pr-blog-element1">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-blog-element1.png" alt="element">
                        </span>
                        <span class="pr-blog-element2">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-blog-element2.png" alt="element">
                        </span>
                        <span class="pr-blog-element3">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-blog-element3.png" alt="element">
                        </span>
                        <span class="pr-blog-element4">
                            <img src="assets/themes/designmodov2.1/flat-ui/images/pr-blog-element4.png" alt="element">
                        </span>
                    </div>
                    <ul class="pr-navigation">
                        <li class="active"><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                    </ul>
                </div>
                <div class="frame">
                    <?php $records=get_index_content_by_type(16);foreach($records as $rs){?>
                <h2><?php echo $rs['title'];?></h2>
                <p><?php echo $rs['content'];?></p>
                <?php };?>
                    <div class="row">
                    <?php $records=get_index_content_by_type(17);foreach($records as $rs){?>
                    <div class="block">
                <h3><?php echo $rs['title'];?></h3>
                <p><?php echo $rs['content'];?></p>
                </div>
                <?php };?>
                    </div>
                </div>
            </div>
        </section>
        <section class="responsive-section">
            <div class="holder">
                <div class="frame">
                    <?php $records=get_index_content_by_type(18);foreach($records as $rs){?>
                <h2><?php echo $rs['title'];?></h2>
                <p><?php echo $rs['content'];?></p>
                <?php };?>
                    <ul class="mobile-list">
                        <li><div class="mobile"><span>&nbsp;</span>手机</div></li>
                        <li><div class="tablet selected"><span>&nbsp;</span>平板</div></li>
                    </ul>
                </div>
                <span class="responsive-iphone" style="opacity:0;left:200px;"><img src="assets/themes/designmodov2.1/flat-ui/images/iphone-screen.gif" />
                </span>
                <span class="responsive-ipad" style="display:none;"><img src="assets/themes/designmodov2.1/flat-ui/images/ipad-screen.gif" />
                </span>
            </div>
        </section>
        <section class="grab-section" id="buy">
        </section>
        <section class="share-section"> 
        </section>
        <span class="share-section-cont"></span>
    </article>
</div>
<div style="clear:both;"></div>
    </div><!-- end main-wrapper -->
<?php include_once('inc-foot.php');?>
</body>
</html>
