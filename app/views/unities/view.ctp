<div class="unities view">
<h2><?php  __('Unity');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unity['Unity']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unit Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unity['Unity']['unit_description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unity', true), array('action' => 'edit', $unity['Unity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Unity', true), array('action' => 'delete', $unity['Unity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $unity['Unity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unities', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unity', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conversion Rates', true), array('controller' => 'conversion_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conversion Rate', true), array('controller' => 'conversion_rates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Conversion Rates');?></h3>
	<?php if (!empty($unity['ConversionRate'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Unity Id'); ?></th>
		<th><?php __('Unity Id1'); ?></th>
		<th><?php __('Conversion Rate'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($unity['ConversionRate'] as $conversionRate):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $conversionRate['id'];?></td>
			<td><?php echo $conversionRate['unity_id'];?></td>
			<td><?php echo $conversionRate['unity_id1'];?></td>
			<td><?php echo $conversionRate['conversion_rate'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'conversion_rates', 'action' => 'view', $conversionRate['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'conversion_rates', 'action' => 'edit', $conversionRate['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'conversion_rates', 'action' => 'delete', $conversionRate['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conversionRate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conversion Rate', true), array('controller' => 'conversion_rates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
