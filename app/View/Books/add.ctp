<div class="books form">

	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Books'), array('controller' => 'books', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
		</div>
	</div>

<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo $this->TwitterBootstrap->input('name');
		echo $this->TwitterBootstrap->input('Image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Books'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="nav-header"><?php echo "Images" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Images'), array('controller' => 'images', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Image'), array('controller' => 'images', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('flag', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'help'), array('escape'=>false)); ?> </li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black') .' '. __(' Settings'), array('controller' => 'settings'), array('escape'=>false)); ?> </li>
	</ul>
</div>
<?php $this->end(); ?>