<?php include 'includes/document_head.php'?>
		<div id="wrapper">	
			<?php include 'includes/topbar.php'?>		
			<?php include 'includes/sidebar.php'?>
			<div id="main_container" class="main_container container_16 clearfix">
				<?php include 'includes/navigation.php'?>
				<div class="flat_area grid_16">
					<h2>Fullcalendar</h2>
					<p>Here is a really powerful Events calendar which can display events from multiple sources. The user can drag and drop events to rearrange events and also drop new events onto the calendar from the list. Try it out.</p>
				</div>
				<div class="box grid_13">
					<h2 class="box_head grad_colour round_top">Calendar</h2>
					<a href="#" class="grabber">&nbsp;</a>
					<a href="#" class="toggle">&nbsp;</a>
					<div class="toggle_container">					
						<div class="block">
						<div id="calendar">&nbsp;</div>
						</div>
					</div>
				</div>
				<div class="box grid_3">
					<h2 class="box_head grad_colour round_top">Events <small>(Drag/Drop)</small></h2>
					<div class="block no_padding">						
					<ul id="calendar_drag_list" class="full_width">
						<li><a href="#">Meeting</a></li>
						<li><a href="#">Lunch</a></li>
						<li><a href="#">Holidays</a></li>
						<li><a href="#">Social</a></li>
					</ul>
					</div>
					
				</div>
			</div>
		</div>
<?php include 'includes/closing_items.php'?>