<div class="decisionModelRelationships view">
<h2><?php  __('Decision Model Relationship');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelRelationship['DecisionModelRelationship']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Decision Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelRelationship['DecisionModel']['name'], array('controller' => 'decision_models', 'action' => 'view', $decisionModelRelationship['DecisionModel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prenode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelRelationship['Prenode']['description'], array('controller' => 'decision_model_nodes', 'action' => 'view', $decisionModelRelationship['Prenode']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sucnode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelRelationship['Sucnode']['description'], array('controller' => 'decision_model_nodes', 'action' => 'view', $decisionModelRelationship['Sucnode']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelRelationship['DecisionModelRelationship']['level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relationship Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelRelationship['RelationshipType']['description'], array('controller' => 'relationship_types', 'action' => 'view', $decisionModelRelationship['RelationshipType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelRelationship['User']['name'], array('controller' => 'users', 'action' => 'view', $decisionModelRelationship['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelRelationship['DecisionModelRelationship']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Decision Model Relationship', true), array('action' => 'edit', $decisionModelRelationship['DecisionModelRelationship']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Decision Model Relationship', true), array('action' => 'delete', $decisionModelRelationship['DecisionModelRelationship']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModelRelationship['DecisionModelRelationship']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('action' => 'add')); ?> </li>
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
