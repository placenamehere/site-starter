<?php
	// Page Specific Template Variables
	$pageTitle = "Content Inventory / Code Reference";			// Used in the <title> element
	$pageId ="";				// page variable for nav / body id
	$pageCategory = "";			// section varicable for nav/menu functionality, stying / body class
	$pageMetaDesc = "";			// Meta desscription element value
	$pageMetaKeywords = "";		// Meta tags element value
	$pageAssets = array(
		'css' 	=> array(),		// Any template specific CSS files. Refer to the base file name in the array. For instance, to include home.css, set 'css' = array('css')
		'js'	=> array()		// Any template specific JS files. Refer to the base file name in the array. For instance, to include home.js, set 'js' = array('js');
	);
?>
<?php include_once('inc/header.inc.php'); ?>
<!-- BEGIN PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main BELOW -->
<!-- BEGIN PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main BELOW -->

	<h1>Reference Document / Code Inventory</h1>

	<h2>Special Link Types</h2>

	<ul>
		<li><a href="#TBD" class="email">email link (a.email)</a></li>
		<li><a href="#TBD" rel="external">external link (a[rel=external])</a></li>
	</ul>

	<h2>Buttons, Submits, Link Buttons</h2>

	<ul>
		<li><a href="#TBD" class="bth">a tag button (a.btn)</a></li>
	</ul>



<!-- END PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main ABOVE -->
<!-- END PAGE SPECIFIC CONTENT AREA. PLACE CONTENTS OF div.main ABOVE -->
<?php include_once('inc/footer.inc.php'); ?>