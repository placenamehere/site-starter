</div> <!--/.main -->
<footer>
	<p>universal footer content</p>
</footer> <!--/footer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/libs/jquery/jquery-1.6.2.min.js">\x3C/script>')</script>

<script src="/js/global.js" defer></script>
<?php
if (isset($pageAssets)) {
	foreach($pageAssets['js'] as $js) { ?>
	<script src="/js/<?=$js;?>" defer></script>
	<?
	}
}
?>
</body>
</html>