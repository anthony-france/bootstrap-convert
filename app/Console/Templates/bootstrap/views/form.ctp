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
<div class="<?php echo $pluralVar;?> form">

	<div class="row-fluid">
		<div class="span12">
		<?php	
			switch ($action) {
				case "add":
					 echo "\t<?php echo \$this->TwitterBootstrap->button_link(\$this->TwitterBootstrap->icon('list', 'black') .' '. __('List " . $pluralHumanName ."'), array('controller' => '{$pluralVar}', 'action'=>'index'), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> \n"; 
				break;
				case "edit":
					echo "\t<?php echo \$this->TwitterBootstrap->button_form(\$this->TwitterBootstrap->icon('trash', 'white') .' '. __('Delete " . $singularHumanName . "'), array('action' => 'delete', \$this->request->data['{$modelClass}']['{$primaryKey}']), array('style'=>'danger', 'class'=>'pull-right', 'escape'=>false), __('Are you sure you want to delete # %s?', \$this->request->data['{$modelClass}']['{$primaryKey}'])); ?> \n";
					echo "\t<?php echo \$this->TwitterBootstrap->button_link(\$this->TwitterBootstrap->icon('info-sign', 'black') .' '. __('View " . $singularHumanName ."'), array('action' => 'view', \$this->request->data['{$modelClass}']['{$primaryKey}']), array('escape'=>false, 'style'=>'default', 'class'=>'pull-right')); ?> \n"; 
				break;
				default:
					echo "&nbsp;";
				break;
			}
		 ?>
		</div>
	</div>

<?php echo "<?php echo \$this->Form->create('{$modelClass}');?>\n";?>
	<fieldset>
		<legend><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></legend>
<?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\techo \$this->TwitterBootstrap->input('{$field}');\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$this->TwitterBootstrap->input('{$assocName}');\n";
			}
		}
		echo "\t?>\n";
?>
	</fieldset>
<?php
	echo "<?php echo \$this->Form->end(__('Submit'));?>\n";
?>
</div>

<?php echo "<?php \$this->start('sidebar'); ?>"; ?>
<div class="sidebar well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo "<?php echo __('Actions'); ?>"; ?></li>
			<?php if (strpos($action, 'add') === false): ?>
					<li><?php echo "<?php echo \$this->Form->postLink(\$this->TwitterBootstrap->icon('trash', 'black') .' '.__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), , array('escape'=>false), __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>";?></li>
			<?php endif;?>
					<li><?php echo "<?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('list', 'black') .' '.__('List " . $pluralHumanName . "'), array('action' => 'index'), array('escape'=>false));?>";?></li>
			<?php
					$done = array();
					foreach ($associations as $type => $data) {
						foreach ($data as $alias => $details) {
							if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
								echo "\t\t<li class=\"nav-header\"><?php echo \"". Inflector::humanize($details['controller']) ."\" ?> </li>\n";
								echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('list', 'black') .' '. __('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('escape'=>false)); ?> </li>\n";
								echo "\t\t<li><?php echo \$this->Html->link(\$this->TwitterBootstrap->icon('plus', 'black') .' '. __(' New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape'=>false)); ?> </li>\n";
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
