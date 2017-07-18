<div class="nodeTypes form">
<?php echo $this->Form->create('NodeType');?>
	<fieldset>
		<legend><?php __('Edit Node Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('NodeType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('NodeType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Node Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Nodes', true), array('controller' => 'decision_model_nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Node', true), array('controller' => 'decision_model_nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>