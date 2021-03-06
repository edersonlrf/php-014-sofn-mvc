<!--================================================== -->

<!-- These scripts will be located in Header So we can add scripts inside body (used in class.datatables.php) -->
<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	if (!window.jQuery) {
		document.write('<script src="<?php echo ASSETS_URL; ?>/js/libs/jquery-2.0.2.min.js"><\/script>');
	}
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
	if (!window.jQuery.ui) {
		document.write('<script src="<?php echo ASSETS_URL; ?>/js/libs/jquery-ui.min.js"><\/script>');
	}
</script> -->

<!-- IMPORTANT: APP CONFIG -->
<script src="<?php echo ASSETS_URL; ?>/js/app.config.seed.js"></script>

<!-- BOOTSTRAP JS -->
<script src="<?php echo ASSETS_URL; ?>/js/bootstrap/bootstrap.min.js"></script>

<!--[if IE 8]>
	<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="<?php echo ASSETS_URL; ?>/js/app.seed.js"></script>

<script src="<?php echo assets_url(); ?>/js/<?php echo $this->page; ?>.js"></script>