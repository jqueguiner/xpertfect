<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Administration</title>
                <?php echo $html->css('admin/style.css'); ?>
                <?php echo $html->css('admin/calendar.css'); ?>
	</head>

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			<h1 id="sidebar-title"><a href="#">Admin</a></h1>
			<!-- Logo (221px wide) -->
			<?php echo $html->image('/css/admin/logo.png'); ?>

			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Salut,<?php echo $session->read('Auth.User.login'); ?><br />
				<a href="<?php echo $html->url('/'); ?>">Voir le site</a> | <a href="<?php echo $html->url(array('controller'=>'users','action'=>'logout')); ?>">Se déconnecter</a>
			</div>

			<ul id="main-nav">  <!-- Accordion Menu -->
				<li>
					<a href="<?php echo $html->url(array('controller'=>'administration','action'=>'index')); ?>" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>
				</li>
				<li>
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Cosplays
					</a>
					<ul>
						<li><?php echo $html->link('Ajouter un cosplay',array('controller'=>'posts','action'=>'edit')); ?></li>
						<li><?php echo $html->link('Voir les cosplay',array('controller'=>'posts','action'=>'index')); ?></li>
					</ul>
				</li>
			</ul> <!-- End #main-nav -->

                        <?php echo $this->element('plannedcalendar'); ?>
		</div></div> <!-- End #sidebar -->

		<div id="main-content"> <!-- Main Content Section with everything -->
                <?php echo $content_for_layout; ?>
                <div class="clear"></div>
                </div> <!-- End #main-content -->

	</div>
        <?php echo $this->element('sql_dump'); ?>
        <?php echo $html->script('jquery.js'); ?>
        <?php echo $html->script('ckeditor/ckeditor.js'); ?>
        <?php echo $html->script('admin/functions.js'); ?>
        <?php echo $html->script('admin/calendar.js'); ?>
        <?php echo $scripts_for_layout; ?>
     </body>
</html>
