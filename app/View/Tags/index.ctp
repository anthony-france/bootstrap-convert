<div class="tags index">
	<div class="row">
		<div class="span10"><h2><?php echo __('Tags');?></h2></div>
		<div class="span2"><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Tag', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?></div>
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
		
		</tr>
	<?php
	foreach ($tags as $tag): ?>
	<tr>
		<td><?php echo h($tag['Tag']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($tag['Tag']['name'], array('action' => 'view', $tag['Tag']['id'])); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('action' => 'add'),  array('escape'=>false)); ?></li>
			<li class="nav-header"><?php echo "Documents" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Documents'), array('controller' => 'documents', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Images" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Images'), array('controller' => 'images', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Image'), array('controller' => 'images', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('flag', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'help'), array('escape'=>false)); ?> </li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black') .' '. __(' Settings'), array('controller' => 'settings'), array('escape'=>false)); ?> </li>
	</ul>
</div>
<?php $this->end(); ?>