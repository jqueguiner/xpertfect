<div id="nav_top" class="clearfix  round_top">
	<ul class="clearfix">
		<li class="current">

                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/white/Laptop.png", array("alt" => "Dashboard")).'Dashboard',
                            "dashboard_sorter.php",
                            array('escape'=>false));
                    ?>



                </li>
	
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Frames.png", array("alt" => "Layout")).'Layout',
                            "#",
                            array('escape'=>false));
                    ?>
                    
			<ul class="dropdown">
				<li>
                                    <?php
                                        echo $this->Html->link('16 Grid - 960.gs', 'layout.php', array('target'=>'_blank'));
                                    ?>
                                </li>
				<li>
                                    <?php
                                        echo $this->Html->link('Text & Typography', 'text.php', array('target'=>'_blank'));
                                    ?>
                                </li>
				<li>
                                    <?php
                                        echo $this->Html->link('Layout Width', '#', array('class'=>'has_slide'));
                                    ?>
					<ul class="slideout">						
						<li>
                                                    <?php
                                                        echo $this->Html->link('Fixed', 'css/theme/switcher1.php?style=../layout_fixed.css');
                                                    ?>
                                                </li>
						<li>
                                                    <?php
                                                        echo $this->Html->link('Fluid', 'css/theme/switcher1.php?style=switcher.css');
                                                    ?>
                                                </li>

					</ul>
				</li>
				<li>
                                    <a class="has_slide" href="#">
                                        Layout Position
                                    </a>
					<ul class="slideout">
						<li>
                                                    <?php
                                                        echo $this->Html->link('Side', 'css/theme/switcher2.php?style=switcher.css');
                                                    ?>
                                                </li>
						<li>
                                                    <?php
                                                        echo $this->Html->link('Top', 'css/theme/switcher2.php?style=../layout_top.css');
                                                    ?>
                                                </li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Coverflow.png", array("alt" => "Boxes")).'Boxes',
                            "#",
                            array('escape'=>false));
                    ?>

			<ul class="dropdown">
				<li>
                                    <a class="has_slide" href="#">
                                        Tab Boxes</a>
					<ul class="slideout">
						<li>
                                                   <?php
                                                    echo $this->Html->link('Horizontal Tabs', 'tabs.php', array('target'=>'_blank'));
                                                    ?>
                                                </li>
						<li>
                                                   <?php
                                                    echo $this->Html->link('Vertical Tabs', 'tabs.php', array('target'=>'_blank'));
                                                    ?>
                                                </li>
					</ul>
				</li>
					
                                <li>
                                            <?php
                                            echo $this->Html->link('Accordions Boxes', 'accordions.php', array('target'=>'_blank'));
                                            ?>
                                </li>
                                <li>
                                            <?php
                                            echo $this->Html->link('Step by Step Wizard', 'wizard.php', array('target'=>'_blank'));
                                            ?>
                                </li>
                                <li>
                                        <?php
                                        echo $this->Html->link('Code View', 'code.php', array('target'=>'_blank'));
                                        ?>
                                </li>
			</ul>
		</li>	
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Create%20Write.png", array("alt" => "Forms")).'Forms',
                            "#",
                            array('escape'=>false));
                    ?>
			<ul class="dropdown">
				<li>
                                     <?php
                                        echo $this->Html->link('Input & Validation', 'forms.php');
                                     ?>
				</li>
				<li>
                                    <?php
                                        echo $this->Html->link('Date', '#', array('class'=>'has_slide'));
                                    ?>
					<ul class="slideout">
						<li>
                                                    <?php
                                                    echo $this->Html->link('Date Field', 'forms.php');
                                                    ?>
                                                </li>
						<li>
                                                    <?php
                                                    echo $this->Html->link('Inline Picker', 'forms.php');
                                                    ?>
                                                </li>
					</ul>
				</li>
				<li>
                                    <?php
                                        echo $this->Html->link('Sliders', '#', array('class'=>'has_slide'));
                                    ?>
					<ul class="slideout">
						<li>
                                                    <?php
                                                    echo $this->Html->link('Horizontal Slider', 'forms.php');
                                                    ?>
                                                </li>
						<li>
                                                    <?php
                                                    echo $this->Html->link('Vertical Slider', 'forms.php');
                                                    ?>
                                                </li>
						<li>
                                                    <?php
                                                    echo $this->Html->link('Range Slider', 'forms.php');
                                                    ?>
                                                </li>
						<li>
                                                    <?php
                                                    echo $this->Html->link('Progress Bar', 'forms.php');
                                                    ?>
                                                </li>
					</ul>
				</li>
				<li>
                                    <?php
                                    echo $this->Html->link('Buttons', 'buttons.php');
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('WYSIWYG Editor', 'editor.php');
                                    ?>
                                </li>
			</ul>
		</li>		
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Images.png", array("alt" => "Gallery")).'Gallery',
                            "#",
                            array('escape'=>false));
                    ?>
			<ul class="dropdown">
				<li>
                                    <?php
                                    echo $this->Html->link('Fancybox Gallery', 'gallery.php');
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('Sortable Gallery', 'gallery_sortable.php');
                                    ?>
                                </li>
			</ul>
		</li>			
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Blocks%20Images.png", array("alt" => "Tables")).'Tables',
                            "#",
                            array('escape'=>false));
                    ?>
			<ul class="dropdown dropdown_left">
				<li>
                                    <?php
                                    echo $this->Html->link('DataTables', 'tables.php');
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('Regular Tables', 'tables_static.php');
                                    ?>
                                </li>
			</ul>			
		</li>
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Plane%20Suitcase.png", array("alt" => "Organize")).'Organize',
                            "#",
                            array('escape'=>false));
                    ?>
			<ul class="dropdown dropdown_left">
				<li>
                                    <?php
                                    echo $this->Html->link(
                                            $this->Html->image("admin/icons/small/grey/Folder.png", array("alt" => "Files")).'Files',
                                            array('controller' => 'users', 'action'=> 'files'),
                                            array('escape'=>false));
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link(
                                            $this->Html->image("admin/icons/small/grey/Users.png", array("alt" => "Contacts")).'Contacts',
                                            "contacts.php",
                                            array('escape'=>false));
                                    ?>
                                </li>
			</ul>
		</li>
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Month%20Calendar.png", array("alt" => "Calendar")).'Calendar',
                            "calendar.php",
                            array('escape'=>false));
                   ?>
                </li>
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Graph.png", array("alt" => "charts")).'charts',
                            "charts.php",
                            array('escape'=>false));
                   ?>
                </li>
		<li>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image("admin/icons/small/grey/Locked%202.png", array("alt" => "login")).'login',
                            "login.php",
                            array('escape'=>false));
                   ?>
                </li>
	</ul>	
</div><!-- #nav_top -->
