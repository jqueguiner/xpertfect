<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Surname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['surname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adress'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['adress']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['zip_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['mail']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hash Validation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['hash_validation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
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
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Activities');?></h3>
	<?php if (!empty($user['Activity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Default Duration'); ?></th>
		<th><?php __('Activity Type Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Activity'] as $activity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $activity['id'];?></td>
			<td><?php echo $activity['description'];?></td>
			<td><?php echo $activity['default_duration'];?></td>
			<td><?php echo $activity['activity_type_id'];?></td>
			<td><?php echo $activity['user_id'];?></td>
			<td><?php echo $activity['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'activities', 'action' => 'edit', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'activities', 'action' => 'delete', $activity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $activity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity', true), array('controller' => 'activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Activity Types');?></h3>
	<?php if (!empty($user['ActivityType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['ActivityType'] as $activityType):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $activityType['id'];?></td>
			<td><?php echo $activityType['description'];?></td>
			<td><?php echo $activityType['user_id'];?></td>
			<td><?php echo $activityType['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'activity_types', 'action' => 'view', $activityType['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'activity_types', 'action' => 'edit', $activityType['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'activity_types', 'action' => 'delete', $activityType['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $activityType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity Type', true), array('controller' => 'activity_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Decision Model Nodes');?></h3>
	<?php if (!empty($user['DecisionModelNode'])):?>
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
		foreach ($user['DecisionModelNode'] as $decisionModelNode):
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
	<?php if (!empty($user['DecisionModelRelationship'])):?>
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
		foreach ($user['DecisionModelRelationship'] as $decisionModelRelationship):
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
	<h3><?php __('Related Decision Models');?></h3>
	<?php if (!empty($user['DecisionModel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Unique Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['DecisionModel'] as $decisionModel):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $decisionModel['id'];?></td>
			<td><?php echo $decisionModel['name'];?></td>
			<td><?php echo $decisionModel['unique_name'];?></td>
			<td><?php echo $decisionModel['created'];?></td>
			<td><?php echo $decisionModel['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'decision_models', 'action' => 'view', $decisionModel['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'decision_models', 'action' => 'edit', $decisionModel['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'decision_models', 'action' => 'delete', $decisionModel['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Decision Model', true), array('controller' => 'decision_models', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Node Types');?></h3>
	<?php if (!empty($user['NodeType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['NodeType'] as $nodeType):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $nodeType['id'];?></td>
			<td><?php echo $nodeType['description'];?></td>
			<td><?php echo $nodeType['user_id'];?></td>
			<td><?php echo $nodeType['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'node_types', 'action' => 'view', $nodeType['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'node_types', 'action' => 'edit', $nodeType['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'node_types', 'action' => 'delete', $nodeType['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nodeType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Node Type', true), array('controller' => 'node_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Project Activities');?></h3>
	<?php if (!empty($user['ProjectActivity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Default X'); ?></th>
		<th><?php __('Default Y'); ?></th>
		<th><?php __('Level'); ?></th>
		<th><?php __('ES'); ?></th>
		<th><?php __('LF'); ?></th>
		<th><?php __('Duration'); ?></th>
		<th><?php __('Activity Id'); ?></th>
		<th><?php __('Project Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['ProjectActivity'] as $projectActivity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $projectActivity['id'];?></td>
			<td><?php echo $projectActivity['default_x'];?></td>
			<td><?php echo $projectActivity['default_y'];?></td>
			<td><?php echo $projectActivity['level'];?></td>
			<td><?php echo $projectActivity['ES'];?></td>
			<td><?php echo $projectActivity['LF'];?></td>
			<td><?php echo $projectActivity['duration'];?></td>
			<td><?php echo $projectActivity['activity_id'];?></td>
			<td><?php echo $projectActivity['project_id'];?></td>
			<td><?php echo $projectActivity['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'project_activities', 'action' => 'view', $projectActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'project_activities', 'action' => 'edit', $projectActivity['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'project_activities', 'action' => 'delete', $projectActivity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projectActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Activity', true), array('controller' => 'project_activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Project Relationships');?></h3>
	<?php if (!empty($user['ProjectRelationship'])):?>
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
		foreach ($user['ProjectRelationship'] as $projectRelationship):
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
<div class="related">
	<h3><?php __('Related Projects');?></h3>
	<?php if (!empty($user['Project'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Unique Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Project'] as $project):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $project['id'];?></td>
			<td><?php echo $project['name'];?></td>
			<td><?php echo $project['unique_name'];?></td>
			<td><?php echo $project['created'];?></td>
			<td><?php echo $project['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
