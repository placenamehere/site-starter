</div> <!--/.main -->
<footer>
	<p>universal footer content</p>
</footer> <!--/footer -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/libs/jquery/jquery-1.6.2.min.js">\x3C/script>')</script>

<?php if (is_dev()): ?>
	<!-- un-minimized scripts -->
	<script src="/js/global.js" defer></script>
	<?php
	if (isset($pageAssets)) {
		foreach($pageAssets['js'] as $js) { ?>
	<script src="/js/<?=$js;?>.js" defer></script>
		<?
		}
	}
	?>
<?php else: ?>
	<!-- minimized scripts -->
	<script src="/js/all.min.js" defer></script>
	<?php
	if (isset($pageAssets)) {
		foreach($pageAssets['js'] as $js) { ?>
	<script src="/js/<?=$js;?>.min.js" defer></script>
		<?
		}
	}
	?>
<?php endif;?>

</body>
</html>