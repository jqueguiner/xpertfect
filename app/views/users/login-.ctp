
<html>
    <head>
		<meta charset="utf-8">

		<!-- iPhone, iPad and Android specific settings -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1;">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<title>Administration</title>

		<!-- Create an icon and splash screen for iPhone and iPad -->
		<link rel="apple-touch-icon" href="http://localhost/xpert_8/webroot/img/admin/iOS_icon.png">
		<link rel="apple-touch-startup-image" href="http://localhost/xpert_8/webroot/img/admin/iOS_startup.png">

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
	<body orient="portrait" style="min-height: 420px; min-width: 320px; ">
		
		<form id="UserLoginForm" method="post" action="/xpert_8/users/login" accept-charset="utf-8">
		<input type="hidden" name="_method" value="POST">
			<div id="login_box" class="round_all clearfix">
			<label class="fields"><strong>Username</strong><input type="text" name="data[User][username]" id="UserUsername" class="indent round_all  LV_invalid_field"><span class=" LV_validation_message LV_invalid">Can't be empty!</span></label>

			<label class="fields"><strong>Password</strong><input type="password" name="data[User][password]" id="UserPassword" class="indent round_all"></label>
			<button class="button_colour round_all" onclick="location.href='index.html'"><img width="24" height="24" alt="Locked 2" src="http://localhost/xpert_8/app/webroot/img/admin/icons/small/white/Locked%202.png"><span>Login</span></button>
			<div id="bar" class="round_bottom">
				<label><div class="checker"><span><input type="checkbox" style="opacity: 0; "></span></div>Auto-login in future.</label>
				<a href="#">Forgot your password?</a>
			</div>
			<a href="#" id="login_logo"><span>Adminica Pro II</span></a>
		</div>
		<!--?php include 'includes/template_options.html'?-->
		<script type="text/javascript">
			// focus on first field in form
			$("input[type='text']:first", document.forms[0]).focus();

			var username = new LiveValidation('UserUsername');
			username.add( Validate.Presence );

            var password = new LiveValidation('UserPassword');
			password.add( Validate.Presence );
		</script>

<div id="fancybox-tmp">

</div>
                <div id="fancybox-loading">
                    <div>

                    </div>

                </div>
                <div id="fancybox-overlay">

                </div>
                <div id="fancybox-wrap">
                    <div id="fancybox-outer">
                        <div class="fancybox-bg" id="fancybox-bg-n">

                        </div>
                        <div class="fancybox-bg" id="fancybox-bg-ne">

                        </div>
                        <div class="fancybox-bg" id="fancybox-bg-e">

                        </div>
                        <div class="fancybox-bg" id="fancybox-bg-se">

                        </div>
                        <div class="fancybox-bg" id="fancybox-bg-s">

                        </div>
                        <div class="fancybox-bg" id="fancybox-bg-sw">

                        </div>
                        <div class="fancybox-bg" id="fancybox-bg-w">

                        </div>
                        <div class="fancybox-bg" id="fancybox-bg-nw">

                        </div>
                        <div id="fancybox-content">

                        </div>
                        <a id="fancybox-close">

                        </a>
                        <div id="fancybox-title">

                        </div>
                        <a href="javascript:;" id="fancybox-left">
                            <span class="fancy-ico" id="fancybox-left-ico">

                            </span>
                        </a>
                        <a href="javascript:;" id="fancybox-right">
                            <span class="fancy-ico" id="fancybox-right-ico">

                            </span>
                        </a>
                    </div>
                </div>
                <a href="#" id="toTop" style="display: none; ">
                    <span id="toTopHover">

                    </span>
                    To Top
                </a>
        </body>

</html>