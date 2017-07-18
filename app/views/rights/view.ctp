<div class="rights view">
<h2><?php  __('Right');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $right['Right']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $right['Right']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Level Right'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $right['Right']['level_Right']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Right', true), array('action' => 'edit', $right['Right']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Right', true), array('action' => 'delete', $right['Right']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $right['Right']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rights', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Right', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($right['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Login'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Surname'); ?></th>
		<th><?php __('Adress'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Zip Code'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('Mail'); ?></th>
		<th><?php __('Hash Validation'); ?></th>
		<th><?php __('Right Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($right['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['login'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['surname'];?></td>
			<td><?php echo $user['adress'];?></td>
			<td><?php echo $user['city'];?></td>
			<td><?php echo $user['zip_code'];?></td>
			<td><?php echo $user['country'];?></td>
			<td><?php echo $user['mail'];?></td>
			<td><?php echo $user['hash_validation'];?></td>
			<td><?php echo $user['right_id'];?></td>
			<td><?php echo $user['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
