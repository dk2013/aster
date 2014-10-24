<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?=$title;?></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta name="description" content="<?=$description;?>" />
	<meta name="keywords" content="<?=$keywords;?>" />
	<meta name="author" content="<?=$view->author;?>" />
    <link rel="stylesheet" href="<?=base_url()?>css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>css/grid.css" type="text/css" media="screen" />
    <link rel="icon" type="image/gif" href="<?=base_url()?>images/favicon.gif" />
    <?php
	if(!empty($google_analytics)) {
		echo $google_analytics;
	}
	?>
</head>
<body>