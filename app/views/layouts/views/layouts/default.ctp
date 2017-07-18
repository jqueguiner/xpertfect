<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

        <!-- DEFAULT COLORS -->
        <meta name="color:Background" content="#fff"/>
        <meta name="color:Title" content="#000"/>
        <meta name="color:Title Background" content="#eaeaea"/>
        <meta name="color:Title Roll" content="#fff"/>
        <meta name="color:Title Background Roll" content="#000"/>
        <meta name="color:Description" content="#000"/>
        <meta name="color:Post Title" content="#000"/>
        <meta name="color:Post Title Roll" content="#999"/>
        <meta name="color:Date Month" content="#000"/>
        <meta name="color:Date Year" content="#666"/>
        <meta name="color:top nav" content="#000"/>
        <meta name="color:top nav background" content="#eaeaea"/>
        <meta name="color:top nav roll" content="#fff"/>
        <meta name="color:top nav background roll" content="#000"/>
        <meta name="color:content link" content="#666"/>
        <meta name="color:content link border" content="#999"/>
        <meta name="color:content link roll" content="#000"/>
        <meta name="color:content link border roll" content="#000"/>
        <!-- END DEFAULT COLORS -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><html>
                <head>
        <title><?php echo $title_for_layout; ?> | BonjourCosplay.com</title>
        <link rel="shortcut icon" href="http://rick.kibi.fr/design/images/favico.ico"/>
        <link rel="alternate" type="application/rss+xml" href="<?php echo $html->url(array('controller'=>'posts','action'=>'flux')); ?>.rss"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <?php echo $html->css('style.css'); ?>
        <?php echo $html->script('main.js'); ?>
        <?php echo $scripts_for_layout; ?>
</head>
<body>
	<div id="wrapper">
	<div id="topNav">
	<ul>
            <li><a href="<?php echo $html->url(array('controller'=>'posts','action'=>'flux')); ?>.rss">RSS</a></li>
        </ul>
	</div>
	<div id="contentHolder">
	<div id="mastHead">
	<h1><a href="<?php echo $html->url('/'); ?>"></a></h1>
	<p>
	Chaque jour à 10h un nouveau cosplay qui des boites !
	</p>
<script type="text/javascript"><!--
google_ad_client = "pub-7455217003714260";
/* 300x250, date de création 07/06/10 */
google_ad_slot = "0298962290";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	</div>
	<div id="content">
	<div id="postHolder">
            <?php echo $content_for_layout; ?>
	</div>

	</div>

	</div>
	<div id="footer">
	<!-- you should leave these credits in. You don't have to but if you take them out Karma will get you. And Karma doesn't mess around -->
	<p>Site développé par <a href="http://grafikart.fr">Grafikart.fr</a>. <a href="http://bigfattheme.tumblr.com">Big Fat Theme</a> by <a href="http://daelan.com">Daelan</a>.</p>
	</div>
	</div>

	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({appId: 'your app id', status: true, cookie: true,
				 xfbml: true});
	  };
	  (function() {
		var e = document.createElement('script'); e.async = true;
		e.src = document.location.protocol +
		  '//connect.facebook.net/fr_FR/all.js';
		document.getElementById('fb-root').appendChild(e);
	  }());
	</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16836120-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php echo $this->element('sql_dump'); ?>
</body>
</html> 