<div class="decisionModels view">
<h2><?php  __('Decision Model');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModel['DecisionModel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModel['DecisionModel']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unique Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModel['DecisionModel']['unique_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModel['DecisionModel']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModel['User']['name'], array('controller' => 'users', 'action' => 'view', $decisionModel['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Decision Model', true), array('action' => 'edit', $decisionModel['DecisionModel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Decision Model', true), array('action' => 'delete', $decisionModel['DecisionModel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModel['DecisionModel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Models', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Nodes', true), array('controller' => 'decision_model_nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Node', true), array('controller' => 'decision_model_nodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('controller' => 'decision_model_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('controller' => 'decision_model_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Decision Model Nodes');?></h3>
	<?php if (!empty($decisionModel['DecisionModelNode'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Default X'); ?></th>
		<th><?php __('Default Y'); ?></th>
		<th><?php __('Node Type Id'); ?></th>
		<th><?php __('Level'); ?></th>
		<th><?php __('Father Id'); ?></th>
		<th><?php __('Decision Model Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($decisionModel['DecisionModelNode'] as $decisionModelNode):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $decisionModelNode['id'];?></td>
			<td><?php echo $decisionModelNode['description'];?></td>
			<td><?php echo $decisionModelNode['default_x'];?></td>
			<td><?php echo $decisionModelNode['default_y'];?></td>
			<td><?php echo $decisionModelNode['node_type_id'];?></td>
			<td><?php echo $decisionModelNode['level'];?></td>
			<td><?php echo $decisionModelNode['father_id'];?></td>
			<td><?php echo $decisionModelNode['decision_model_id'];?></td>
			<td><?php echo $decisionModelNode['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'decision_model_nodes', 'action' => 'view', $decisionModelNode['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'decision_model_nodes', 'action' => 'edit', $decisionModelNode['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'decision_model_nodes', 'action' => 'delete', $decisionModelNode['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModelNode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Decision Model Node', true), array('controller' => 'decision_model_nodes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Decision Model Relationships');?></h3>
	<?php if (!empty($decisionModel['DecisionModelRelationship'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Decision Model Id'); ?></th>
		<th><?php __('Prenode Id'); ?></th>
		<th><?php __('Sucnode Id'); ?></th>
		<th><?php __('Level'); ?></th>
		<th><?php __('Relationship Type Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($decisionModel['DecisionModelRelationship'] as $decisionModelRelationship):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $decisionModelRelationship['id'];?></td>
			<td><?php echo $decisionModelRelationship['decision_model_id'];?></td>
			<td><?php echo $decisionModelRelationship['prenode_id'];?></td>
			<td><?php echo $decisionModelRelationship['sucnode_id'];?></td>
			<td><?php echo $decisionModelRelationship['level'];?></td>
			<td><?php echo $decisionModelRelationship['relationship_type_id'];?></td>
			<td><?php echo $decisionModelRelationship['user_id'];?></td>
			<td><?php echo $decisionModelRelationship['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'decision_model_relationships', 'action' => 'view', $decisionModelRelationship['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'decision_model_relationships', 'action' => 'edit', $decisionModelRelationship['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'decision_model_relationships', 'action' => 'delete', $decisionModelRelationship['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModelRelationship['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('controller' => 'decision_model_relationships', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
