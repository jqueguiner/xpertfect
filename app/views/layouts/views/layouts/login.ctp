<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Administration</title>
                <?php echo $html->css('admin/style.css'); ?>
	</head>
	<body id="login">

		<div id="login-wrapper" class="png_bg">

			<div id="login-top">
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<?php echo $html->image('/css/admin/logo.png',array('id'=>'logo')); ?>
			</div> <!-- End #logn-top -->

			<div id="login-content">
					<?php echo $content_for_layout; ?>
			</div> <!-- End #login-content -->

		</div> <!-- End #login-wrapper -->

  </body>
</html>