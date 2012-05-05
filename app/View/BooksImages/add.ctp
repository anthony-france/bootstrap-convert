<div class="booksImages form">

	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Books Images'), array('controller' => 'booksImages', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
		</div>
	</div>

<?php echo $this->Form->create('BooksImage');?>
	<fieldset>
		<legend><?php echo __('Add Books Image'); ?></legend>
	<?php
		echo $this->TwitterBootstrap->input('book_id');
		echo $this->TwitterBootstrap->input('image_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Books Images'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="nav-header"><?php echo "Books" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Books'), array('controller' => 'books', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Book'), array('controller' => 'books', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Images" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Images'), array('controller' => 'images', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Image'), array('controller' => 'images', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>