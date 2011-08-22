<?php
	// Page Specific Template Variables
	$pageTitle = "";			// Used in the <title> element
	$pageId ="";				// page variable for nav / body id
	$pageCategory = "";			// section varicable for nav/menu functionality, stying / body class
	$pageMetaDesc = "";			// Meta desscription element value
	$pageMetaKeywords = "";		// Meta tags element value
	$pageAssets = array(
		'css' 	=> array(),		// Any template specific CSS files. Refer to the base file name in the array. For instance, to include home.css, set 'css' = array('home')
		'js'	=> array()		// Any template specific JS files. Refer to the base file name in the array. For instance, to include home.js, set 'js' = array('home');
	);
?>
<?php include_once('inc/config.inc.php'); ?>
<?php include_once('inc/header.inc.php'); ?>
<!-- BEGIN PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main BELOW -->
<!-- BEGIN PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main BELOW -->

	<p>here is the page level content</p>








<!-- END PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main ABOVE -->
<!-- END PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main ABOVE -->
<?php include_once('inc/footer.inc.php'); ?>