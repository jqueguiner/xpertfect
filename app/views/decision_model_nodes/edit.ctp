<div class="decisionModelNodes form">
<?php echo $this->Form->create('DecisionModelNode');?>
	<fieldset>
		<legend><?php __('Edit Decision Model Node'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('default_x');
		echo $this->Form->input('default_y');
		echo $this->Form->input('node_type_id');
		echo $this->Form->input('level');
		echo $this->Form->input('father_id');
		echo $this->Form->input('decision_model_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DecisionModelNode.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DecisionModelNode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Decision Model Nodes', true), array('action' => 'index'));?></li>
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