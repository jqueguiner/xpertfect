<div class="relationshipTypes form">
<?php echo $this->Form->create('RelationshipType');?>
	<fieldset>
		<legend><?php __('Admin Edit Relationship Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('RelationshipType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('RelationshipType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Relationship Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('controller' => 'decision_model_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('controller' => 'decision_model_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Relationships', true), array('controller' => 'project_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Relationship', true), array('controller' => 'project_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>