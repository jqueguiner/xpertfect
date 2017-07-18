<div class="projects view">
<h2><?php  __('Project');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unique Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['unique_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($project['User']['name'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project', true), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Project', true), array('action' => 'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Activities', true), array('controller' => 'project_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Activity', true), array('controller' => 'project_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Project Activities');?></h3>
	<?php if (!empty($project['ProjectActivity'])):?>
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
		foreach ($project['ProjectActivity'] as $projectActivity):
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
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($project['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Login'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Surname'); ?></th>
		<th><?php __('Adress'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Zip Code'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('Mail'); ?></th>
		<th><?php __('Hash Validation'); ?></th>
		<th><?php __('Right Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['login'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['surname'];?></td>
			<td><?php echo $user['adress'];?></td>
			<td><?php echo $user['city'];?></td>
			<td><?php echo $user['zip_code'];?></td>
			<td><?php echo $user['country'];?></td>
			<td><?php echo $user['mail'];?></td>
			<td><?php echo $user['hash_validation'];?></td>
			<td><?php echo $user['right_id'];?></td>
			<td><?php echo $user['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
