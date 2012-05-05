<div class="contacts view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo __('Contact');?></h2></div>
		<div class="span6">
				<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit Contact'), array('action' => 'edit', $contact['Contact']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Contacts'), array('controller' => 'contacts', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Contact', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['email']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		
	
<?php $this->start('sidebar'); ?><div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Contacts'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Contact'), array('action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('flag', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'help'), array('escape'=>false)); ?> </li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black') .' '. __(' Settings'), array('controller' => 'settings'), array('escape'=>false)); ?> </li>
	</ul>
</div>
<?php $this->end(); ?>
