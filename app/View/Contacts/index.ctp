<div class="contacts index">
	<div class="row">
		<div class="span10"><h2><?php echo __('Contacts');?></h2></div>
		<div class="span2"><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Contact', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?></div>
	</div>
	<div class="row">
		<div class="span12">
			<div class="paging top pull-right">
			<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
			</div>
		</div>
	</div>
	
	<table class="table table-striped table-condensed">
	<tr>
			
		<th><?php echo $this->Paginator->sort('id');?></th>
		
			
		<th><?php echo $this->Paginator->sort('name');?></th>
		
			
		<th><?php echo $this->Paginator->sort('phone');?></th>
		
			
		<th><?php echo $this->Paginator->sort('email');?></th>
		
		</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($contact['Contact']['name'], array('action' => 'view', $contact['Contact']['id'])); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="row">
			<div class="span12">
				<div class="paging bottom pull-right">
				<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
				</div>
			</div>
				<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>				</p>
		</div>
</div>


<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Contact'), array('action' => 'add'),  array('escape'=>false)); ?></li>
				<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>