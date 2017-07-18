<div class="decisionModelNodes view">
<h2><?php  __('Decision Model Node');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelNode['DecisionModelNode']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelNode['DecisionModelNode']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Default X'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelNode['DecisionModelNode']['default_x']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Default Y'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelNode['DecisionModelNode']['default_y']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Node Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelNode['NodeType']['id'], array('controller' => 'node_types', 'action' => 'view', $decisionModelNode['NodeType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $decisionModelNode['DecisionModelNode']['level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Decision Model Node'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelNode['DecisionModelNode']['id'], array('controller' => 'decision_model_nodes', 'action' => 'view', $decisionModelNode['DecisionModelNode']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Decision Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelNode['DecisionModel']['name'], array('controller' => 'decision_models', 'action' => 'view', $decisionModelNode['DecisionModel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($decisionModelNode['User']['name'], array('controller' => 'users', 'action' => 'view', $decisionModelNode['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Decision Model Node', true), array('action' => 'edit', $decisionModelNode['DecisionModelNode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Decision Model Node', true), array('action' => 'delete', $decisionModelNode['DecisionModelNode']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $decisionModelNode['DecisionModelNode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Decision Model Nodes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Node', true), array('action' => 'add')); ?> </li>
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
