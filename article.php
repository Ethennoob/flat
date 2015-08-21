<?php include_once('lib/common.function.php');
$article=get_article_by_id(_get('id'));?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en"><head>
<title>胖子 UI Pro 文章- Bootstrap 设计框架 - Designmodo</title> 
<meta charset="UTF-8" />
<?php include_once('inc-SEO.php');?>
<link href="favicon.ico" type="image/ico" rel="shortcut icon">
<link rel='stylesheet' id='mediaelement-css'  href='wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=2.16.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='wp-includes/js/mediaelement/wp-mediaelement.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='smart-coupon-css'  href='wp-content/plugins/woocommerce-smart-coupons/assets/css/smart-coupon.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='dm_style-css'  href='wp-content/themes/designmodov2.1/style.css?t=1433226057' type='text/css' media='all' />
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
<script type='text/javascript' src='wp-content/themes/designmodov2.1/js/common.js?t=1433226057'></script>

<script type='text/javascript' src='wp-content/plugins/top-stories/js/top-stories.js?v=1&#038;ver=4.2.2'></script>
<script type='text/javascript' src='wp-content/plugins/woochimp/assets/js/woochimp-frontend.js?ver=1.4.3'></script>
<script type='text/javascript' src='wp-content/themes/designmodov2.1/custom-pages/startup-wordpress/presentation/MyFontsWebfontsKit.js'></script>
<style type="text/css" id="et-bloom-custom-css">
					.et_bloom .et_bloom_optin_1 .et_bloom_form_content { background-color: #f8f8f8 !important; } .et_bloom .et_bloom_optin_1 .et_bloom_form_content button { background-color: #55a753 !important; } .et_bloom .et_bloom_optin_1 .et_bloom_form_content button { background-color: #55a753 !important; } .et_bloom .et_bloom_optin_1 h2, .et_bloom .et_bloom_optin_1 h2 span, .et_bloom .et_bloom_optin_1 h2 strong { font-family: "Raleway", Helvetica, Arial, Lucida, sans-serif; }.et_bloom .et_bloom_optin_1 p, .et_bloom .et_bloom_optin_1 p span, .et_bloom .et_bloom_optin_1 p strong, .et_bloom .et_bloom_optin_1 form input, .et_bloom .et_bloom_optin_1 form button span { font-family: "Open Sans", Helvetica, Arial, Lucida, sans-serif; } 
				</style>
      


</head>

<body class="single single-post postid-270380 single-format-standard et_bloom post-maps-websites">
    <?php include_once('inc-nav.php');?>

    <div id="header-wrapper">
        <div id="logo">
            <a class="main-logo" href="index.php"></a>
        </div><!--end logo-->

        	
    </div><!--end header-wrapper-->

    <div id="main-wrapper">


<div id="content-wrapper">
<!--     <div style="clear:both;"></div> -->
    <div class="articles-container">
                        <div class="article-single">
                    <h1 itemprop="name" class="single-title"><?php
echo $article['title'];
?></h1>

                    <div id="single-meta">
                        <span>
                            &nbsp;&nbsp;•&nbsp;&nbsp;<span itemprop="datePublished" content="2015-06-01"><?php echo $article['timeline']; ?></span>
                            </span>
                    </div><!--end single meta-->

                    <span>
<?php
echo $article['content'];
?>
                    </span> 
                    </div><!--end share-comm2-->
  
            </div><!--end article-single-->


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

    <div style="clear:both;"></div>
</div>  
<div class="comments-wrapper">
<!-- <h5 class="comments-title"><a href="maps-websites/#comments">Comment</a></h5> -->

            

<!-- You can start editing here. -->
<div id="comments">

    <li class="comment even thread-even depth-1" id="comment-770883">
        <div id="li-comment-770883">
        
            <div class="comment-author">
<h3 id="reply-title">
            评论区<small><a rel="nofollow" id="cancel-comment-reply-link" href="/maps-websites/#respond" style="display:none;">Cancel Reply</a></small>
        </h3>
                <div class="data-container">
                <?php $records=get_comment_by_type(_get('id'));
                if(is_array($records))    
                {  
          foreach($records as $rs){?>         
                    <h5>
                        <?php echo $rs['username']; ?><span><a href="maps-websites/#comment-770883"><?php echo $rs['timeline']; ?></a> </span>
                    </h5>

                    <p><?php echo $rs['content']; ?></p>
                    <?php }};?>  
                </div>

                <div style="clear:both;"></div>
            </div><!--end comment-author-->
        </div>
    </li>    
    <!-- #comment-## -->

            </div><!--end #comments-->
<?php 
if (isset($_SESSION['level']) && !empty($_SESSION['level'])) {
     ?>
    <div id="respond">
        <h3 id="reply-title">
            留下评论<small><a rel="nofollow" id="cancel-comment-reply-link" href="/maps-websites/#respond" style="display:none;">Cancel Reply</a></small>
        </h3>

                <form action="do.php?d=comment_add" method="post" id="commentform">

                <div class="comment-form-comment">
                    <span class="required">*</span> <label for="comment">评论</label> <em>最大字数为50字</em>
                    <textarea name="content" placeholder="Leave a comment..." id="comment" class="comm-txt" rows="10" cols="50" tabindex="4"></textarea>
                </div>

                <div class="form-submit">
                    <input type="hidden" name="tid" value="<?php echo $article['id'];?>" />
                    <input type="submit" id="submit" class="button" tabindex="5" value="发布评论" />
                </div>

                
                </form><!--end #commentform-->

    </div><!--end #respond -->
    <?php  }else {?>
    <input type="submit" class="button" onclick="javascrtpt:window.location.href='login.php'" value="登陆评论" />
    <?php } ?>
    </div><!--end comments-wrapper-->
</div>
</div><!--end articles container-->
<?php include_once('inc-foot.php');?>


</body>
</html>

