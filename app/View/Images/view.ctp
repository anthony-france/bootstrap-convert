<div class="images view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo __('Image');?></h2></div>
		<div class="span6">
				<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Image'), array('action' => 'delete', $image['Image']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $image['Image']['id'])); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit Image'), array('action' => 'edit', $image['Image']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Images'), array('controller' => 'images', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Image', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($image['Image']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caption'); ?></dt>
		<dd>
			<?php echo h($image['Image']['caption']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($image['Image']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($image['Image']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mimetype'); ?></dt>
		<dd>
			<?php echo h($image['Image']['mimetype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filesize'); ?></dt>
		<dd>
			<?php echo h($image['Image']['filesize']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($image['Image']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($image['Image']['modified']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		<div class="row row-fluid">
		<div class="span12">
			<div class="related">
				<h3><?php echo __('Related Books');?></h3>
				<?php if (!empty($image['Book'])):?>
				<table class="table table-striped table-condensed">
					<tr>
								<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
					</tr>
						<?php
								$i = 0;
								foreach ($image['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id'];?></td>
			<td><?php echo $book['created'];?></td>
			<td><?php echo $book['modified'];?></td>
			<td><?php echo $book['name'];?></td>
		</tr>
	<?php endforeach; ?>
				</table>
				</div> <!-- end related -->
			</div> <!-- end span -->
		</div> <!-- end row -->
	<?php endif; ?>

		<div class="row row-fluid">
		<div class="span12">
			<div class="related">
				<h3><?php echo __('Related Tags');?></h3>
				<?php if (!empty($image['Tag'])):?>
				<table class="table table-striped table-condensed">
					<tr>
								<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
					</tr>
						<?php
								$i = 0;
								foreach ($image['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id'];?></td>
			<td><?php echo $tag['name'];?></td>
		</tr>
	<?php endforeach; ?>
				</table>
				</div> <!-- end related -->
			</div> <!-- end span -->
		</div> <!-- end row -->
	<?php endif; ?>

		
	
<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Image'), array('action' => 'edit', $image['Image']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Image'), array('action' => 'delete', $image['Image']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Images'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Image'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Books" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Books'), array('controller' => 'books', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Book'), array('controller' => 'books', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Tags" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Tags'), array('controller' => 'tags', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('flag', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'help'), array('escape'=>false)); ?> </li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black') .' '. __(' Settings'), array('controller' => 'settings'), array('escape'=>false)); ?> </li>
	</ul>
</div>
<?php $this->end(); ?>
