<div class="unities index">
	<h2><?php __('Unities');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('unit_description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($unities as $unity):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $unity['Unity']['id']; ?>&nbsp;</td>
		<td><?php echo $unity['Unity']['unit_description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $unity['Unity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $unity['Unity']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $unity['Unity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $unity['Unity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Unity', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Conversion Rates', true), array('controller' => 'conversion_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conversion Rate', true), array('controller' => 'conversion_rates', 'action' => 'add')); ?> </li>
	</ul>
</div>