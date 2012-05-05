<div class="images index">
	<div class="row">
		<div class="span10"><h2><?php echo __('Images');?></h2></div>
		<div class="span2"><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Image', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?></div>
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
		
			
		<th><?php echo $this->Paginator->sort('caption');?></th>
		
			
		<th><?php echo $this->Paginator->sort('filename');?></th>
		
			
		<th><?php echo $this->Paginator->sort('dir');?></th>
		
			
		<th><?php echo $this->Paginator->sort('mimetype');?></th>
		
			
		<th><?php echo $this->Paginator->sort('filesize');?></th>
		
			
		<th><?php echo $this->Paginator->sort('created');?></th>
		
			
		<th><?php echo $this->Paginator->sort('modified');?></th>
		
		</tr>
	<?php
	foreach ($images as $image): ?>
	<tr>
		<td><?php echo $this->Html->link($image['Image']['id'], array('action' => 'view', $image['Image']['id'])); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['caption']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['filename']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['dir']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['mimetype']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['filesize']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['created']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['modified']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Image'), array('action' => 'add'),  array('escape'=>false)); ?></li>
			<li class="nav-header"><?php echo "Books" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Books'), array('controller' => 'books', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Book'), array('controller' => 'books', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Tags" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Tags'), array('controller' => 'tags', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>