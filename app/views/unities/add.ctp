<div class="unities form">
<?php echo $this->Form->create('Unity');?>
	<fieldset>
		<legend><?php __('Add Unity'); ?></legend>
	<?php
		echo $this->Form->input('unit_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Unities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Conversion Rates', true), array('controller' => 'conversion_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conversion Rate', true), array('controller' => 'conversion_rates', 'action' => 'add')); ?> </li>
	</ul>
</div>