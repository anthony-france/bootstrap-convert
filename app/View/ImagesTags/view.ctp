<div class="imagesTags view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo __('Images Tag');?></h2></div>
		<div class="span6">
				<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Images Tag'), array('action' => 'delete', $imagesTag['ImagesTag']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $imagesTag['ImagesTag']['id'])); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit Images Tag'), array('action' => 'edit', $imagesTag['ImagesTag']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Images Tags'), array('controller' => 'imagesTags', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Images Tag', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagesTag['ImagesTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesTag['Image']['id'], array('controller' => 'images', 'action' => 'view', $imagesTag['Image']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $imagesTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		
	
<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Images Tag'), array('action' => 'edit', $imagesTag['ImagesTag']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Images Tag'), array('action' => 'delete', $imagesTag['ImagesTag']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $imagesTag['ImagesTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Images Tags'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Images Tag'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Images" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Images'), array('controller' => 'images', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Image'), array('controller' => 'images', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Tags" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Tags'), array('controller' => 'tags', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>
