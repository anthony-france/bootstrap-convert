<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="<?php echo $pluralVar;?> index">
	<div class="row">
		<div class="span10"><h2><?php echo "<?php echo __('{$pluralHumanName}');?>";?></h2></div>
		<div class="span2"><?php echo "<?php echo \$this->TwitterBootstrap->button_link(\$this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add {$singularHumanName}', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>"; ?></div>
	</div>
	<div class="row">
		<div class="span12">
			<div class="paging top pull-right">
			<?php
				echo "<?php\n";
				echo "\t\techo \$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));\n";
				echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
				echo "\t\techo \$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));\n";
				echo "\t?>\n";
			?>
			</div>
		</div>
	</div>
	
	<table class="table table-striped table-condensed">
	<tr>
	<?php  foreach ($fields as $field):?>
		
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}');?>";?></th>
		
	<?php endforeach;?>
	</tr>
	<?php
	echo "<?php
	foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				
				if ($field == $displayField) {
					 echo "\t\t<td><?php echo \$this->Html->link(\${$singularVar}['{$modelClass}']['{$field}'], array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>&nbsp;</td>\n"; 
					/* echo "\t\t<td><?php echo \$this->TwitterBootstrap->button_link(\$this->TwitterBootstrap->icon('list', 'black') .' '. __('Details'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-left')); ?> \n"; */
				}
				else  {
					echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
				}
			}
		}

	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>

	<div class="row">
			<div class="span12">
				<div class="paging bottom pull-right">
				<?php
					echo "<?php\n";
					echo "\t\techo \$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));\n";
					echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
					echo "\t\techo \$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));\n";
					echo "\t?>\n";
				?>
				</div>
			</div>
				<p>
				<?php echo "<?php
				echo \$this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>";?>
				</p>
		</div>
</div>


<?php echo "<?php \$this->start('sidebar'); ?>"; ?>
<div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo "<?php echo __('Actions'); ?>"; ?></li>
		<li><?php echo "<?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New " . $singularHumanName . "'), array('action' => 'add'),  array('escape'=>false)); ?>";?></li>
	<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "\t\t<li class=\"nav-header\"><?php echo \"". Inflector::humanize($details['controller']) ."\" ?> </li>\n";
					echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('list', 'black') .' '.__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'),  array('escape'=>false)); ?> </li>\n";
					echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape'=>false)); ?> </li>\n";
					$done[] = $details['controller'];
				}
			}
		}
	?>
			<li class="divider"></li>
			<?php echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('home', 'black') .' '. __(' Help'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>\n"; ?>
			<?php //echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('cog', 'black') .' '. __(' Settings'), array('controller' => 'settings'), array('escape'=>false)); ?> </li>\n"; ?>
	</ul>
</div>
<?php echo "<?php \$this->end(); ?>"; ?>