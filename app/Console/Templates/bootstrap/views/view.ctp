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
<div class="<?php echo $pluralVar;?> view">
	
	<div class="row row-fluid">
		<div class="span6"><h2><?php echo "<?php echo __('{$singularHumanName}');?>";?></h2></div>
		<div class="span6">
			<?php echo "\t<?php echo \$this->TwitterBootstrap->button_form(\$this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> \n"; ?>
			<?php echo "\t<?php echo \$this->TwitterBootstrap->button_link(\$this->TwitterBootstrap->icon('pencil', 'black') .' '. __('Edit " . $singularHumanName ."'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> \n";  ?>
			<?php echo "\t<?php echo \$this->TwitterBootstrap->button_link(\$this->TwitterBootstrap->icon('list', 'black') .' '. __('List " . $pluralHumanName ."'), array('controller' => '{$pluralVar}', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> \n";  ?>
			<?php echo "\t<?php echo \$this->TwitterBootstrap->button_link(\$this->TwitterBootstrap->icon('plus-sign', 'white') .' '.'Add {$singularHumanName}', array('action'=>'add'), array('class'=>'pull-right', 'escape'=>false, 'style'=>'primary'));?>"; ?>
		</div>
	</div>
	<div class="row row-fluid">
		<div class="span12">
			<dl>
				<?php
				foreach ($fields as $field) {
					$isKey = false;
					if (!empty($associations['belongsTo'])) {
						foreach ($associations['belongsTo'] as $alias => $details) {
							if ($field === $details['foreignKey']) {
								$isKey = true;
								echo "\t\t<dt><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></dt>\n";
								echo "\t\t<dd>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
								break;
							}
						}
					}
					if ($isKey !== true) {
						echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
						echo "\t\t<dd>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
					}
				}
				?>
			</dl>
		</div> <!-- end span -->
	</div> <!-- end row -->
</div> <!-- end view -->


	<?php
	if (!empty($associations['hasOne'])) :
		foreach ($associations['hasOne'] as $alias => $details): ?>
		<div class="row row-fluid">
			<div class="span12">
				<div class="related">
					<h3><?php echo "<?php echo __('Related " . Inflector::humanize($details['controller']) . "');?>";?></h3>
					<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
					<dl>
						<?php
							foreach ($details['fields'] as $field) {
								echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "');?></dt>\n";
								echo "\t\t<dd>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}'];?>\n&nbsp;</dd>\n";
							}
						?>
					</dl>
					<?php echo "<?php endif; ?>\n";?>
				</div> <!-- end related -->
			</div> <!-- end span -->
		</div> <!-- end row -->
		<?php
		endforeach;
	endif;
	if (empty($associations['hasMany'])) {
		$associations['hasMany'] = array();
	}
	if (empty($associations['hasAndBelongsToMany'])) {
		$associations['hasAndBelongsToMany'] = array();
	}
	$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
	$i = 0;
	foreach ($relations as $alias => $details):
		$otherSingularVar = Inflector::variable($alias);
		$otherPluralHumanName = Inflector::humanize($details['controller']);
		?>
	<div class="row row-fluid">
		<div class="span12">
			<div class="related">
				<h3><?php echo "<?php echo __('Related " . $otherPluralHumanName . "');?>";?></h3>
				<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
				<table class="table table-striped table-condensed">
					<tr>
						<?php
							foreach ($details['fields'] as $field) {
								echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
							}
						?>
					</tr>
					<?php
						echo "\t<?php
								\$i = 0;
								foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
								echo "\t\t<tr>\n";
									foreach ($details['fields'] as $field) {
										echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}'];?></td>\n";
									}
							echo "\t\t</tr>\n";
						echo "\t<?php endforeach; ?>\n";
					?>
				</table>
				</div> <!-- end related -->
			</div> <!-- end span -->
		</div> <!-- end row -->
	<?php echo "<?php endif; ?>\n\n";?>
	<?php endforeach;?>
	
	
<?php echo "<?php \$this->start('sidebar'); ?>"; ?>
<div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo "<?php echo __('Actions'); ?>"; ?></li>
			<?php
				echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('pencil', 'black') .' '.__('Edit " . $singularHumanName ."'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false)); ?> </li>\n";
				echo "\t\t<li><?php echo \$this->Form->postLink(\$this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>false), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
				echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('list', 'black') .' '.__('List " . $pluralHumanName . "'), array('action' => 'index'), array('escape'=>false)); ?> </li>\n";
				echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New " . $singularHumanName . "'), array('action' => 'add'), array('escape'=>false)); ?> </li>\n";

				$done = array();
				foreach ($associations as $type => $data) {
					foreach ($data as $alias => $details) {
						if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
							echo "\t\t<li class=\"nav-header\"><?php echo \"". Inflector::humanize($details['controller']) ."\" ?> </li>\n";
							echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('list', 'black') .' '.__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('escape'=>false)); ?> </li>\n";
							echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('plus-sign', 'black') .' '.__('New " .  Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape'=>false)); ?> </li>\n";
							$done[] = $details['controller'];
						}
					}
				}
			?>
			<li class="divider"></li>
			<?php echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('home', 'black') .' '. __(' Home'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape'=>false)); ?> </li>\n"; ?>
			
	</ul>
</div>
<?php echo "<?php \$this->end(); ?>"; ?>

