<html>
    <head>
		<meta charset="utf-8">

		<!-- iPhone, iPad and Android specific settings -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1;">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<title>Adminica | The Professional Admin Theme</title>

		<!-- Create an icon and splash screen for iPhone and iPad -->
			<?php echo $this->Html->meta(
			    'favicon.ico',
			    '/img/favicon.ico',
			    array('type' => 'icon')
			);?>
			 
			<?php echo $this->Html->meta(
			    'appletouch',
			    '/img/admin/iOS_icon.png',
			    array('type' => 'icon','rel'=>'apple-touch-icon'));
			?>
			



		<!-- These stylesheets are used  -->
		<?php
		$css=array(
		'admin/all.css',
		
		'admin/theme/switcher.css',
		'admin/theme/switcher1.php?default=switcher.css',
		'admin/theme/switcher2.php?default=switcher.css',
		'admin/theme/switcher3.php?default=switcher.css',
		'admin/theme/switcher4.php?default=switcher.css'
	);
		
		foreach ($css as $acss){
			echo $html->css($acss);
		};
		 ?>
		

		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->

		<!-- Load JQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

		<!-- Load JQuery UI -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

		<!-- Load Interface Plugins -->
		<?php
		$js=array(
		'admin/uniform/jquery.uniform.js',
		'admin/livevalidation/livevalidation_standalone.js',
		'admin/tipsy/jquery.tipsy.js',
		'admin/iPhone/jquery.iphoneui.js',
		'admin/uitotop/js/jquery.ui.totop.js',
		'admin/fancybox/jquery.fancybox-1.3.4.js',
		'admin/quicksand/jquery.quicksand.js',
		'admin/quicksand/custom_sorter.js',
		'admin/quicksand/dash_sorter.js',
		'admin/quicksand/jquery-css-transform.js',
		'admin/quicksand/jquery-animate-css-rotate-scale.js',
		'admin/tinyeditor/tinyeditor.js',
		'admin/DataTables/jquery.dataTables.js',
		'admin/jqueryFileTree/jqueryFileTree.js',
		'admin/slidernav/slidernav.js',
		'admin/fullcalendar/fullcalendar.min.js',
		'admin/fullcalendar/gcal.js',
		'admin/flot/excanvas.js',
		'admin/flot/jquery.flot.js',
		'admin/flot/jquery.flot.resize.js',
		'admin/flot/jquery.flot.pie.js',
		
		'admin/adminica/adminica_ui.js',
		
		
		
		);
		
		foreach ($js as $ajs){
			echo $html->script($ajs);
		};
		 
		?>


	</head>
	<body>