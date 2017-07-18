<div class="decisionModelRelationships index">
	<h2><?php __('Decision Model Relationships');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('decision_model_id');?></th>
			<th><?php echo $this->Paginator->sort('prenode_id');?></th>
			<th><?php echo $this->Paginator->sort('sucnode_id');?></th>
			<th><?php echo $this->Paginator->sort('level');?></th>
			<th><?php echo $this->Paginator->sort('relationship_type_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($decisionModelRelationships as $decisionModelRelationship):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $decisionModelRelationship['DecisionModelRelationship']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($decisionModelRelationship['DecisionModel']['name'], array('controller' => 'decision_models', 'action' => 'view', $decisionModelRelationship['DecisionModel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($decisionModelRelationship['Prenode']['description'], array('controller' => 'decision_model_nodes', 'action' => 'view', $decisionModelRelationship['Prenode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($decisionModelRelationship['Sucnode']['description'], array('controller' => 'decision_model_nodes', 'action' => 'view', $decisionModelRelationship['Sucnode']['id'])); ?>
		</td>
		<td><?php echo $decisionModelRelationship['DecisionModelRelationship']['level']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($decisionModelRelationship['RelationshipType']['description'], array('controller' => 'relationship_types', 'action' => 'view', $decisionModelRelationship['RelationshipType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($decisionModelRelationship['User']['name'], array('controller' => 'users', 'action' => 'view', $decisionModelRelationship['User']['id'])); ?>
		</td>
		<td><?php echo $decisionModelRelationship['DecisionModelRelationship']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $decisionModelRelationship['DecisionModelRelationship']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $decisionModelRelationship['DecisionModelRelationship']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $decisionModelRelationship['DecisionModelRelationship']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModelRelationship['DecisionModelRelationship']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Decision Models', true), array('controller' => 'decision_models', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model', true), array('controller' => 'decision_models', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationship Types', true), array('controller' => 'relationship_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationship Type', true), array('controller' => 'relationship_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Nodes', true), array('controller' => 'decision_model_nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prenode', true), array('controller' => 'decision_model_nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>