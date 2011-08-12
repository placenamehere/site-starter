<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?=$pageTitle;?> | Web Site Name</title>
	<meta name="description" content="<?=$pageMetaDesc;?>">
	<meta name="keywords" content="<?=$pageMetaKeywords;?>">
	<meta name="author" content="">
	
	<link href="/css/reset.css" rel="stylesheet">
	<link href="/css/global.css" rel="stylesheet">
	<?php
	if (isset($pageAssets)) {
		foreach($pageAssets['css'] as $css) { ?>
	<link href="/css/<?=$css;?>" rel="stylesheet">
		<?
		}
	}
	?>
	
	<!-- including dev build for html5 shim and all other behavior -->
	<script src="/libs/modernizr/modernizr-2.0.6.js"></script>
</head>

<body id="<?=$pageId?>" class="<?=$pageCategory?>">
	
<header>
	<p>global header html including nav code that tests $siteCategory/$pageId as needed </p>
</header> <!--/header -->

<div class="main" role="main">
