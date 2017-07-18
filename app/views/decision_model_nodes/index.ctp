<div class="decisionModelNodes index">
	<h2><?php __('Decision Model Nodes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('default_x');?></th>
			<th><?php echo $this->Paginator->sort('default_y');?></th>
			<th><?php echo $this->Paginator->sort('node_type_id');?></th>
			<th><?php echo $this->Paginator->sort('level');?></th>
			<th><?php echo $this->Paginator->sort('father_id');?></th>
			<th><?php echo $this->Paginator->sort('decision_model_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($decisionModelNodes as $decisionModelNode):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $decisionModelNode['DecisionModelNode']['id']; ?>&nbsp;</td>
		<td><?php echo $decisionModelNode['DecisionModelNode']['description']; ?>&nbsp;</td>
		<td><?php echo $decisionModelNode['DecisionModelNode']['default_x']; ?>&nbsp;</td>
		<td><?php echo $decisionModelNode['DecisionModelNode']['default_y']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($decisionModelNode['NodeType']['id'], array('controller' => 'node_types', 'action' => 'view', $decisionModelNode['NodeType']['id'])); ?>
		</td>
		<td><?php echo $decisionModelNode['DecisionModelNode']['level']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($decisionModelNode['DecisionModelNode']['id'], array('controller' => 'decision_model_nodes', 'action' => 'view', $decisionModelNode['DecisionModelNode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($decisionModelNode['DecisionModel']['name'], array('controller' => 'decision_models', 'action' => 'view', $decisionModelNode['DecisionModel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($decisionModelNode['User']['name'], array('controller' => 'users', 'action' => 'view', $decisionModelNode['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $decisionModelNode['DecisionModelNode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $decisionModelNode['DecisionModelNode']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $decisionModelNode['DecisionModelNode']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModelNode['DecisionModelNode']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Decision Model Node', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Node Types', true), array('controller' => 'node_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node Type', true), array('controller' => 'node_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Models', true), array('controller' => 'decision_models', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model', true), array('controller' => 'decision_models', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Nodes', true), array('controller' => 'decision_model_nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Node', true), array('controller' => 'decision_model_nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>