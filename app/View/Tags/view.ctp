<div class="tags view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo __('Tag');?></h2></div>
		<div class="span6">
				<?php echo $this->TwitterBootstrap->button_form($this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit Tag'), array('action' => 'edit', $tag['Tag']['id']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('list', 'black') .' '. __('List Tags'), array('controller' => 'tags', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> 
				<?php echo $this->TwitterBootstrap->button_link($this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add Tag', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
						<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['name']); ?>
			&nbsp;
		</dd>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


		<div class="row row-fluid">
		<div class="span12">
			<div class="related">
				<h3><?php echo __('Related Documents');?></h3>
				<?php if (!empty($tag['Document'])):?>
				<table class="table table-striped table-condensed">
					<tr>
								<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Mimetype'); ?></th>
		<th><?php echo __('Filesize'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
					</tr>
						<?php
								$i = 0;
								foreach ($tag['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id'];?></td>
			<td><?php echo $document['filename'];?></td>
			<td><?php echo $document['dir'];?></td>
			<td><?php echo $document['mimetype'];?></td>
			<td><?php echo $document['filesize'];?></td>
			<td><?php echo $document['created'];?></td>
			<td><?php echo $document['modified'];?></td>
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
				<h3><?php echo __('Related Images');?></h3>
				<?php if (!empty($tag['Image'])):?>
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
								foreach ($tag['Image'] as $image): ?>
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
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id']), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Form->postLink($this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Tags'), array('action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Tag'), array('action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Documents" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Documents'), array('controller' => 'documents', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('escape'=>false)); ?> </li>
		<li class="nav-header"><?php echo "Images" ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('list', 'black') .' '.__('List Images'), array('controller' => 'images', 'action' => 'index'), array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New Image'), array('controller' => 'images', 'action' => 'add'), array('escape'=>false)); ?> </li>
			<li class="divider"></li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('flag', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'help'), array('escape'=>false)); ?> </li>
					<li><?php echo $this->Html->link($this->TwitterBootstrap->icon('cog', 'black') .' '. __(' Settings'), array('controller' => 'settings'), array('escape'=>false)); ?> </li>
	</ul>
</div>
<?php $this->end(); ?>
