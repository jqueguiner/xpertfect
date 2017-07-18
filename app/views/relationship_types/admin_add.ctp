<div class="relationshipTypes form">
<?php echo $this->Form->create('RelationshipType');?>
	<fieldset>
		<legend><?php __('Admin Add Relationship Type'); ?></legend>
	<?php
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Relationship Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('controller' => 'decision_model_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('controller' => 'decision_model_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Relationships', true), array('controller' => 'project_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Relationship', true), array('controller' => 'project_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>