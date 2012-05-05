<div class="documentsTags view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo __('Documents Tag');?></h2></div>
		<div class="span6">
				<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Documents Tag'), array('action' => 'delete', $documentsTag['DocumentsTag']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $documentsTag['DocumentsTag']['id'])); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit Documents Tag'), array('action' => 'edit', $documentsTag['DocumentsTag']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Documents Tags'), array('controller' => 'documentsTags', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Documents Tag', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($documentsTag['DocumentsTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentsTag['Document']['id'], array('controller' => 'documents', 'action' => 'view', $documentsTag['Document']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentsTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $documentsTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		
	
<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Documents Tag'), array('action' => 'edit', $documentsTag['DocumentsTag']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Documents Tag'), array('action' => 'delete', $documentsTag['DocumentsTag']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $documentsTag['DocumentsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Documents Tags'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Documents Tag'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Documents" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Documents'), array('controller' => 'documents', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Tags" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Tags'), array('controller' => 'tags', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>
