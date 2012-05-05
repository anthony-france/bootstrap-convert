<div class="documents view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo __('Document');?></h2></div>
		<div class="span6">
				<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Document'), array('action' => 'delete', $document['Document']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit Document'), array('action' => 'edit', $document['Document']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Documents'), array('controller' => 'documents', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Document', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($document['Document']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($document['Document']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mimetype'); ?></dt>
		<dd>
			<?php echo h($document['Document']['mimetype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filesize'); ?></dt>
		<dd>
			<?php echo h($document['Document']['filesize']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($document['Document']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($document['Document']['modified']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		<div class="row row-fluid">
		<div class="span12">
			<div class="related">
				<h3><?php echo __('Related Tags');?></h3>
				<?php if (!empty($document['Tag'])):?>
				<table class="table table-striped table-condensed">
					<tr>
								<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
					</tr>
						<?php
								$i = 0;
								foreach ($document['Tag'] as $tag): ?>
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
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Document'), array('action' => 'edit', $document['Document']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Document'), array('action' => 'delete', $document['Document']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Documents'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Document'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Tags" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Tags'), array('controller' => 'tags', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>
			 </li>\n"; ?>
	</ul>
</div>
<?php $this->end(); ?>
