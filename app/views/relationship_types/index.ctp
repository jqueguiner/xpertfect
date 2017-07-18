<div class="relationshipTypes index">
	<h2><?php __('Relationship Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($relationshipTypes as $relationshipType):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $relationshipType['RelationshipType']['id']; ?>&nbsp;</td>
		<td><?php echo $relationshipType['RelationshipType']['description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $relationshipType['RelationshipType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $relationshipType['RelationshipType']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $relationshipType['RelationshipType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $relationshipType['RelationshipType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Relationship Type', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Decision Model Relationships', true), array('controller' => 'decision_model_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decision Model Relationship', true), array('controller' => 'decision_model_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Relationships', true), array('controller' => 'project_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Relationship', true), array('controller' => 'project_relationships', 'action' => 'add')); ?> </li>
	</ul>
</div>