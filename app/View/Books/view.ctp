<div class="books view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo __('Book');?></h2></div>
		<div class="span6">
				<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Book'), array('action' => 'delete', $book['Book']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit Book'), array('action' => 'edit', $book['Book']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Books'), array('controller' => 'books', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Book', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($book['Book']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($book['Book']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($book['Book']['name']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		<div class="row row-fluid">
		<div class="span12">
			<div class="related">
				<h3><?php echo __('Related Images');?></h3>
				<?php if (!empty($book['Image'])):?>
				<table class="table table-striped table-condensed">
					<tr>
								<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Caption'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Mimetype'); ?></th>
		<th><?php echo __('Filesize'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
					</tr>
						<?php
								$i = 0;
								foreach ($book['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id'];?></td>
			<td><?php echo $image['caption'];?></td>
			<td><?php echo $image['filename'];?></td>
			<td><?php echo $image['dir'];?></td>
			<td><?php echo $image['mimetype'];?></td>
			<td><?php echo $image['filesize'];?></td>
			<td><?php echo $image['created'];?></td>
			<td><?php echo $image['modified'];?></td>
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
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Book'), array('action' => 'edit', $book['Book']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Book'), array('action' => 'delete', $book['Book']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Books'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Book'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Images" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Images'), array('controller' => 'images', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Image'), array('controller' => 'images', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>
