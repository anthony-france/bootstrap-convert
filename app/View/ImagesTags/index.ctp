<div class="imagesTags index">
	<div class="row">
		<div class="span10"><h2><?php echo __('Images Tags');?></h2></div>
		<div class="span2"><?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Images Tag', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?></div>
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
		
			
		<th><?php echo $this->Paginator->sort('image_id');?></th>
		
			
		<th><?php echo $this->Paginator->sort('tag_id');?></th>
		
		</tr>
	<?php
	foreach ($imagesTags as $imagesTag): ?>
	<tr>
		<td><?php echo $this->Html->link($imagesTag['ImagesTag']['id'], array('action' => 'view', $imagesTag['ImagesTag']['id'])); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imagesTag['Image']['id'], array('controller' => 'images', 'action' => 'view', $imagesTag['Image']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($imagesTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $imagesTag['Tag']['id'])); ?>
		</td>
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
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Images Tag'), array('action' => 'add'),  array('escape'=>false)); ?></li>
			<li class="nav-header"><?php echo "Images" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Images'), array('controller' => 'images', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Image'), array('controller' => 'images', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Tags" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Tags'), array('controller' => 'tags', 'action' => 'index'),  array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>