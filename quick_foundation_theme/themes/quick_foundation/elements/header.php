<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="<?php	echo LANGUAGE?>" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php	echo LANGUAGE?>" > <!--<![endif]-->

<head>
<?php  Loader::element('header_required'); ?>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/normalize.css" />
<link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/foundation.css" />
<link rel="stylesheet" href="<?php echo $this->getStyleSheet('typography.css')?>" />
<?php 
$u = new User();
if ($u->isRegistered()) { ?>
<link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/editfix.css" />
<?php	}?>
<script src="<?php echo $this->getThemePath(); ?>/js/vendor/custom.modernizr.js"></script>
</head>

<body>

<div id="Page">