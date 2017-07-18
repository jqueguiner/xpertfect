<div class="relationshipTypes view">
<h2><?php  __('Relationship Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $relationshipType['RelationshipType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $relationshipType['RelationshipType']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Relationship Type', true), array('action' => 'edit', $relationshipType['RelationshipType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Relationship Type', true), array('action' => 'delete', $relationshipType['RelationshipType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $relationshipType['RelationshipType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationship Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationship Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('controller' => 'decision_model_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('controller' => 'decision_model_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Relationships', true), array('controller' => 'project_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Relationship', true), array('controller' => 'project_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Decision Model Relationships');?></h3>
	<?php if (!empty($relationshipType['DecisionModelRelationship'])):?>
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
		foreach ($relationshipType['DecisionModelRelationship'] as $decisionModelRelationship):
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
<div class="related">
	<h3><?php __('Related Project Relationships');?></h3>
	<?php if (!empty($relationshipType['ProjectRelationship'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Relationship Type Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Predecessor Id'); ?></th>
		<th><?php __('Successor Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($relationshipType['ProjectRelationship'] as $projectRelationship):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $projectRelationship['id'];?></td>
			<td><?php echo $projectRelationship['name'];?></td>
			<td><?php echo $projectRelationship['relationship_type_id'];?></td>
			<td><?php echo $projectRelationship['user_id'];?></td>
			<td><?php echo $projectRelationship['predecessor_id'];?></td>
			<td><?php echo $projectRelationship['successor_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'project_relationships', 'action' => 'view', $projectRelationship['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'project_relationships', 'action' => 'edit', $projectRelationship['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'project_relationships', 'action' => 'delete', $projectRelationship['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projectRelationship['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Relationship', true), array('controller' => 'project_relationships', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
