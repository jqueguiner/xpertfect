<div class="decisionModelRelationships form">
<?php echo $this->Form->create('DecisionModelRelationship');?>
	<fieldset>
		<legend><?php __('Admin Edit Decision Model Relationship'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('decision_model_id');
		echo $this->Form->input('prenode_id');
		echo $this->Form->input('sucnode_id');
		echo $this->Form->input('level');
		echo $this->Form->input('relationship_type_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DecisionModelRelationship.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DecisionModelRelationship.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('action' => 'index'));?></li>
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