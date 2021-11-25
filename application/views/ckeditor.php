<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About to CodeIgniter</title>
	<script type="text/javascript" src="<?php echo site_url('asset/ckeditor/ckeditor.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('asset/ckfinder/ckfinder.js'); ?>"></script>
</head>
<body>

<div id="container">
	<h1>About to CodeIgniter!</h1>

	<div id="body">
		<?php echo $this->ckeditor->editor("content", "value"); ?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>