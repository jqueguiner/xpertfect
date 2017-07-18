<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/media/images/favicon.ico" />
		
		<title>DataTables example</title>

			<?php 
			echo $html->css('media/css/demo_page.css');
			echo $html->css('media/css/demo_page.css');
			
			?>

			<?php 
			echo $javascript->link('media/js/jquery.js');
			echo $javascript->link('media/js/jquery.dataTables.js');


			?>
		<script>
			$(document).ready(function() {
				$('#example').dataTable( {
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "users/results"
				} );
			} );


		</script>
		

	</head>
	<body id="dt_example">
	
		<div id="container">
			<div class="full_width big">
				<i>DataTables</i> server-side processing example
			</div>
			
			<h1>Preamble</h1>
			<p>There are many ways to get your data into DataTables, and if you are working with seriously large databases, you might want to consider using the server-side options that DataTables provides. Basically all of the paging, filtering, sorting etc that DataTables does can be handed off to a server (or any other data source - Google Gears or Adobe Air for example!) and DataTables is just an events and display module.</p>
			<p>The example here shows a very simple display of the CSS data (used in all my other examples), but in this instance coming from the server on each draw. Filtering, multi-column sorting etc all work as you would expect.</p>
			
			<h1>Live example</h1>
			<div id="dynamic">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>Actions</th>
			<th>username</th>
			<th>group_id</th>
			<th>name</th>
			<th>surname</th>
			<th>adress</th>
			<th>city</th>
			<th>zip_code</th>
			<th>country</th>
			<th>mail</th>
			<th>created</th>
			<th>modified</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="5" class="dataTables_empty">Loading data from server</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th>Actions</th>
			<th>username</th>
			<th>group_id</th>
			<th>name</th>
			<th>surname</th>
			<th>adress</th>
			<th>city</th>
			<th>zip_code</th>
			<th>country</th>
			<th>mail</th>
			<th>created</th>
			<th>modified</th>
		</tr>
	</tfoot>
</table>
			
	</body>
</html>







