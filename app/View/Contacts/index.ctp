<div class="contacts index">
	<h2><?php echo __('Contacts');?></h2>
	<?php echo $this->TwitterBootstrap->button_link('Add Contact', array('action'=>'add'), array('escape'=>true));?>	<div class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	
	<table class="table striped-table">
	<tr>
			
		<th></th>
		
			
		<th><?php echo $this->Paginator->sort('name');?></th>
		
			
		<th><?php echo $this->Paginator->sort('phone');?></th>
		
			
		<th><?php echo $this->Paginator->sort('email');?></th>
		
		</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('Details'), array('action' => 'view', $contact['Contact']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-left')); ?> 
		<td><?php echo h($contact['Contact']['name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
