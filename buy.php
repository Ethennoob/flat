<?php 
include('./lib/common.function.php' );check_user()?>
<!DOCTYPE html>
<html>
<head>
<title>胖子 UI Pro 购买- Bootstrap 设计框架 - Designmodo</title>   
<meta charset="utf-8">      
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
    <div id="main-wrapper">
<div id="wrapper">

    <article id="main">
        <section class="item-section">  
        </section>
        <!-- 待开发中   --> 
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
        <!-- 待开发中   --> 
        <section class="grab-section" id="buy">
            <div class="holder">
            <?php 
            $records = get_index_content_by_type(20);
            if(is_array($records))    //add
   {  
            foreach ($records as $rs) { ?>
                <h2><?php echo $rs["title"]; ?></h2>
                <strong class="intro"><?php echo $rs["content"]; ?></strong>
                <?php }} ?>
                <ul class="license-list">
                 <?php 
            $records = get_index_content_by_type(21);
            if(is_array($records))    //add
   {  
            foreach ($records as $rs) { ?>
                    <li class="active">
                        <span class="per-lic">
                            <strong><?php echo $rs["title"]; ?></strong>
                           <?php echo $rs["content"]; ?>
                        </span>
                    </li>
                    <?php } }?>
                    <?php 
            $records = get_index_content_by_type(22);
            if(is_array($records))    //add
   {  
            foreach ($records as $rs) { ?>
                    <li>
                        <span class="dev-lic">
                            <strong><?php echo $rs["title"]; ?></strong>
                           <?php echo $rs["content"]; ?>
                        </span>
                    </li>
                    <?php } }?>
                </ul>
                <div class="boxes developer hidden">
                <?php 
            $records = get_index_content_by_type(23);
            if(is_array($records))    //add
   {  
            foreach ($records as $rs) { ?>
                    <div class="box bndl">
                        <h3><?php echo $rs["title"]; ?></h3>
                        <strong class="title"><?php echo $rs["content"]; ?></strong>
                        <ul class="list">
                           <?php echo $rs["vectorpic"]; ?>
                        </ul>
                        <a href="#" class="btn">购买 $149</a>
                    </div>
                    <?php } }?>
                </div>

                <div class="boxes personal">
                    <?php 
            $records = get_index_content_by_type(24);
            if(is_array($records))    //add
   {  
            foreach ($records as $rs) { ?>
                    <div class="box bndl">
                        <h3><?php echo $rs["title"]; ?></h3>
                        <strong class="title"><?php echo $rs["content"]; ?></strong>
                        <ul class="list">
                           <?php echo $rs["vectorpic"]; ?>
                        </ul>
                        <a href="#" class="btn">购买 $39</a>
                    </div>
                    <?php } }?>
                </div>
            </div>
        </section>
        <section class="share-section">
            <div class="holder">
                <h2>感谢大家支持我们</h2>
            </div>
        </section>
        <span class="share-section-cont"></span>
    </article>
</div>



<div style="clear:both;"></div>
    </div><!-- end main-wrapper -->

<?php include_once('inc-foot.php');?>
</body>
</html>

