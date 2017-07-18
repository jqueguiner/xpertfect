<script type="text/javascript">
//$('.fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix').load(setTimeout('datasizing()', 20));
$('.dataTables_scroll').load(setTimeout('datasizing()', 200));
function datasizing(){
	$('.dataTables_scrollBody').css('min-height','200');
	//alert('test');
	//$("#users_length").val('25');
	$('#users_length').empty();
	<?php 
	$new = '<span class="fg-button ui-button ui-state-default">';	
	$new .= $this->Html->link(__('New User', true), array('action' => 'add')); 
	$new .= '</span>';
		?>
	var user = '<?php echo $new; ?>';
	$('#users_length').append(user);
	
	$('#users_info').empty();
	var info = 	'<?php echo $this->Paginator->counter(array('format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)));?>'
	$('#users_info').append(info);
	
	
	$('#users_paginate').empty();

	var first = '<span class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled" id="first"><?php echo $this->Html->link("first",array('controller' => 'users/index', 'action' => "page:1"),array('id' =>  "page_1")); ?></span>';
	$('#users_paginate').append(first);
	
	var previous = '<span class="fg-button ui-button ui-state-default" id="previous"><?php echo $this->Paginator->prev( __('previous', true), array(), null);?></span>';
	$('#users_paginate').append(previous);

	<?php
	$page = array();
	$i = 1;
	$current = $this->Paginator->counter(array('format' => __('%page%', true)));
	$end=$this->Paginator->counter(array('format' => __('%pages%', true)));
	//$end=1;
	while ($i<=$end){
		
			$page[$i] = $this->Html->link("$i",array('controller' => 'users/index', 'action' => "page:$i"),array('id' =>  "page_$i"));
			//$page[$i] = $i;
		$i++;
	};

	$i=1;
	$links= "<span>";
	foreach ($page as $p){
		
		if ($i == $current){
			$links .= '<span class="fg-button ui-button ui-state-default ui-state-disabled">';
		}else{
			
			$fonction = "jQuery(\'#page_$i\').trigger(\'click\'); ";
			$links .= '<span class="fg-button ui-button ui-state-default"';
			$links .= " onclick=\"";
			$links .= $fonction;
			$links .= "\">";
		}
		
		$links .= "$p";
		$links .= "</span>";
		$i++;
	}
	$links .= "</span>";
	
?>
var span ='<?php echo $links; ?>';

	
	
	$('#users_paginate').append(span);

	
	var next = '<span class="fg-button ui-button ui-state-default" id="next"><?php echo $this->Paginator->next(__('next', true), array(), null);?></span>';
	$('#users_paginate').append(next);

	//$('#users_next').append('	<?php //echo $this->Paginator->next(__('next', true), array(), null, array('class' => 'disabled'));?>');
	
	
	var last = '<span class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default" id="next"><?php echo $this->Html->link("last",array('controller' => 'users/index', 'action' => "page:$end"),array('id' =>  "page_$end"));?></span>';
	$('#users_paginate').append(last);





}

$(document).ready(function() {
	$('#example').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": "users/results"
	} );
} );

</script>

<h2><?php __('Users');?></h2>
			</div>
			<div class="box grid_16 round_all" id="user_table" style="z-index : 10000;" >
				<table class="display datatable" id="users" width="100%"> 
					
					
				
					<thead> 
						<tr> 
							<th class="actions" ><?php __('Actions');?></th>
							<th><?php echo $this->Paginator->sort('username');?></th>
							<th><?php echo $this->Paginator->sort('group_id');?></th>
							<th><?php echo $this->Paginator->sort('name');?></th>
							<th><?php echo $this->Paginator->sort('surname');?></th>
							<th><?php echo $this->Paginator->sort('adress');?></th>
							<th><?php echo $this->Paginator->sort('city');?></th>
							<th><?php echo $this->Paginator->sort('zip_code');?></th>
							<th><?php echo $this->Paginator->sort('country');?></th>
							<th><?php echo $this->Paginator->sort('mail');?></th>
							<th><?php echo $this->Paginator->sort('created');?></th>
							<th><?php echo $this->Paginator->sort('modified');?></th>

						</tr> 
					</thead> 
					<tbody>
					<?php 
						$i = 0;
						foreach ($users as $user):
							$class = null;
							if ($i++ % 2 == 0) {
								$class = ' class="altrow"';
							}
					?>
					 
						<tr class="gradeX"> 
								<td class="actions">
								<?php 
								echo $this->Html->link(
	                            $this->Html->image("admin/icons/actions/Actions-edit-find-user-icon.png", array("alt" => "Layout", "id" => "view")),
	                            array('action' => 'view', $user['User']['id']),
	                            array('escape'=>false));
								?>
								<?php 
								echo $this->Html->link(
	                            $this->Html->image("admin/icons/actions/Actions-document-edit-icon.png", array("alt" => "Layout")),
	                            array('action' => 'edit', $user['User']['id']),
	                            array('escape'=>false));
								?>
								<?php 
								echo $this->Html->link(
	                            $this->Html->image("admin/icons/actions/Actions-edit-delete-icon.png", array("alt" => "Layout")),
	                            array('action' => 'delete', $user['User']['id']),
	                             array('escape'=>false), sprintf(__('Are you sure you want to delete '.$user['User']['username'].'?', true), $user['User']['id'])); 
	                             ?>
						
									
								</td>
								<td><?php echo $user['User']['username']; ?>&nbsp;</td>
								<td>
									<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
								</td>
								<td><?php echo $user['User']['name']; ?>&nbsp;</td>
								<td><?php echo $user['User']['surname']; ?>&nbsp;</td>
								<td><?php echo $user['User']['adress']; ?>&nbsp;</td>
								<td><?php echo $user['User']['city']; ?>&nbsp;</td>
								<td><?php echo $user['User']['zip_code']; ?>&nbsp;</td>
								<td><?php echo $user['User']['country']; ?>&nbsp;</td>
								<td><?php echo $user['User']['mail']; ?>&nbsp;</td>


								<td><?php echo date('j',strtotime($user['User']['created']) ). '-' .
											   date('M',strtotime($user['User']['created']) ). '-' .
											   date('Y',strtotime($user['User']['created']) ); ?>&nbsp;</td>
								<td><?php echo date('j',strtotime($user['User']['modified']) ). '-' .
											   date('M',strtotime($user['User']['modified']) ). '-' .
											   date('Y',strtotime($user['User']['modified']) ); ?>&nbsp;</td>

							</tr>
						<?php endforeach; ?>

					</tbody> 
				</table>
			</div>
			

	</p>
	
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities', true), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity', true), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types', true), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type', true), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Nodes', true), array('controller' => 'decision_model_nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Node', true), array('controller' => 'decision_model_nodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('controller' => 'decision_model_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('controller' => 'decision_model_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Models', true), array('controller' => 'decision_models', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model', true), array('controller' => 'decision_models', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Node Types', true), array('controller' => 'node_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node Type', true), array('controller' => 'node_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Activities', true), array('controller' => 'project_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Activity', true), array('controller' => 'project_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Relationships', true), array('controller' => 'project_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Relationship', true), array('controller' => 'project_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		
		<li><?php echo $page[3];?></li>


	</ul>

</div>


<?php 
//$a = $this->Paginator->numbers();
//debug($a);


?>		 