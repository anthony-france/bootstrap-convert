<div class="documents form">

	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Document'), array('action' => 'delete', $this->request->data['Document']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $this->request->data['Document']['id'])); ?> 
	<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('info-sign', 'black') .' '. __('View Document'), array('action' => 'view', $this->request->data['Document']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
		</div>
	</div>

<?php echo $this->Form->create('Document');?>
	<fieldset>
		<legend><?php echo __('Edit Document'); ?></legend>
	<?php
		echo $this->TwitterBootstrap->input('id');
		echo $this->TwitterBootstrap->input('filename');
		echo $this->TwitterBootstrap->input('dir');
		echo $this->TwitterBootstrap->input('mimetype');
		echo $this->TwitterBootstrap->input('filesize');
		echo $this->TwitterBootstrap->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
								<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete'), array('action' => 'delete', $this->Form->value('Document.id')), , array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Document.id'))); ?></li>
								<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Documents'), array('action' => 'index'), array('escape'=>false));?></li>
					<li class="nav-header"><?php echo "Tags" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Tags'), array('controller' => 'tags', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>