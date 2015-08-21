<?php 
include_once('lib/common.function.php');
$records=get_seo_by_type(1);
foreach($records as $rs){?>
<meta name="description" content="<?php echo $rs['description']; ?>"/>
<meta name="keywords" content="<?php echo $rs['keywords']; ?>"/>
<?php };?>
