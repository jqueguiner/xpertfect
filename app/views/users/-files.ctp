<script>
$(document).ready(function() {

	$('#file_tree').fileTree({ 
		root: '/files/', 
		script: '/files/jqueryFileTree.php', 
		folderEvent: 'click', 
		expandSpeed: 750, 
		collapseSpeed: 750, 
		expandEasing: 'easeOutBounce',
		collapseEasing: 'easeOutBounce', ¸
		loadMessage: 'Please wait ...' }, 
		function(file) { 
			openFile(file);
		});
	
});
</script>
<div class="box grid_10 round_all">
					<h2 class="box_head grad_colour round_top">File Browser</h2>
					<a href="#" class="grabber">&nbsp;</a>
					<a href="#" class="toggle">&nbsp;</a>
					<div class="toggle_container">
						<div class="block">
							<div id="file_tree"></div>					
						</div>
					</div>
				</div>
				
				<div class="flat_area grid_6">
					<h2>File Browser</h2>
					<p>Browse the files and Folders on your server. It can browse from root (not reccommended) or you can specify a specific directory. </p>
					<p>You can download, open, view properties, etc. on files and folder.</p>
				</div>