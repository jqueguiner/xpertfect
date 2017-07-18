<div class="projects form">
<?php echo $this->Form->create('Project');?>
	<fieldset>
		<legend><?php __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('unique_name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Project.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Activities', true), array('controller' => 'project_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Activity', true), array('controller' => 'project_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>