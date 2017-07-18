<div id="sidebar">
	<div class="cog">+</div>
	
	<a href="index.php" class="logo"><span>Adminica Pro II</span></a>

	<div class="user_box round_all clearfix">
		<img src="./app/webroot/img/admin/profile.jpg" width="55" alt="Profile Pic" />
		<h2>Administrator</h2>
		<h3><a class="text_shadow" href="#">John Smith</a></h3>
		<ul>
			<li><a href="#">settings</a><span class="divider">|</span></li>
			<li><a href="login.php">logout</a></li>
		</ul>
	</div><!-- #user_box -->

	<ul id="accordion">
		<li>
                         <?php
                        echo $this->Html->link(
                                $this->Html->image("admin/icons/small/grey/Home.png", array("alt" => "Home")).'Home',
                                "index.php", array('escape'=>false,'class'=>'top_level'));
                        ?>
			<ul class="drawer">
				<li>
                                    <?php
                                    echo $this->Html->link('Activity', '#');
                                    ?>
				<li>
                                    <?php
                                    echo $this->Html->link('Events', '#');
                                    ?>
				<li>
                                    <?php
                                    echo $this->Html->link('Tasks', '#');
                                    ?>
			</ul>
		</li>
		<li>
                    <?php
                        echo $this->Html->link(
                                $this->Html->image("admin/icons/small/grey/Mail.png", array("alt" => "Mailbox")).'Mailbox',
                                "#", array('escape'=>false,'class'=>'top_level'));
                    ?>
			<ul class="drawer">
				<li>
                                    <?php
                                    echo $this->Html->link('Inbox', '#');
                                    ?>
				<li>
                                    <?php
                                    echo $this->Html->link('Sent Items', '#');
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('Drafts', '#');
                                    ?>
				<li>
                                    <?php
                                    echo $this->Html->link('Trash', '#');
                                    ?>
			</ul>
		</li>
		<li>
                    <?php
                        echo $this->Html->link(
                                $this->Html->image("admin/icons/small/grey/Documents.png", array("alt" => "Documents")).'Documents',
                                "#", array('escape'=>false,'class'=>'top_level'));
                    ?>
			<ul class="drawer">
				<li>
                                    <?php
                                    echo $this->Html->link('Create New', '#');
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('View All', '#');
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('Upload/Download', '#');
                                    ?>
                                </li>
			</ul>
		</li>
		<li>
                    <?php
                        echo $this->Html->link(
                                $this->Html->image("admin/icons/small/grey/Users.png", array("alt" => "Members")).'Members',
                                "#", array('escape'=>false,'class'=>'top_level'));
                    ?>
			<ul class="drawer">
				<li>
                                    <?php
                                    echo $this->Html->link(__('Add New', true), array('controller' => 'users','action' => 'add')); 
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link(__('Edit/Delet', true), array('controller' => 'users','action' => 'index')); 
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('Search Profiles', '#');
                                    ?>
                                </li>
			</ul>
		</li>
		<li>
                    <?php
                        echo $this->Html->link(
                                $this->Html->image("admin/icons/small/grey/Graph.png", array("alt" => "Statistics")).'Statistics',
                                "http://www.tricycle.ie", array('escape'=>false,'class'=>'top_level','onclick' => 'parent.location=\'http://www.tricycle.ie\''));
                    ?>
                 </li>
		<li>
                    <?php
                        echo $this->Html->link(
                                $this->Html->image("admin/icons/small/grey/Cog%202.png", array("alt" => "Settings")).'Settings',
                                "#", array('escape'=>false,'class'=>'top_level'));
                    ?>
			<ul class="drawer">
				<li>
                                    <?php
                                    echo $this->Html->link('Account', '#');
                                    ?>
                                </li>
				<li>
                                    <?php
                                    echo $this->Html->link('System', '#');
                                    ?>
                                </li>
			</ul>
		</li>
	</ul>
	<form id="search_side">
            <input class="round_all" type="text" value="XPertFect ..." onclick="value=''">
        </form>
	<ul id="side_links" class="text_shadow" >
		<li>
                    <?php
                    echo $this->Html->link('Online Documentation', 'http://www.tricycle.ie/adminica/index.php/docs/');
                    ?>
		<li>
                    <?php
                    echo $this->Html->link('Expert Forum', 'http://www.tricycle.ie/adminica/index.php/docs/');
                    ?>
                </li>
		<li>
                    <?php
                    echo $this->Html->link('Product Wiki', 'http://www.tricycle.ie/adminica/index.php/docs/');
                    ?>
                </li>
		<li>
                    <?php
                    echo $this->Html->link('OLatest Company News', 'http://www.tricycle.ie/adminica/index.php/docs/');
                    ?>
                </li>
	</ul>
</div><!-- #sidebar -->
