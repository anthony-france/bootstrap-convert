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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<!DOCTYPE html> 

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('cake.generic');

		echo $this->Html->script('jquery-1.7.2.min');
		echo $this->Html->script('jquery-ui-1.8.20.custom.min');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('core');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="flash-area"class="container">
		<div class="row"><div class="span4 offset4"><?php echo $this->TwitterBootstrap->flashes(array('closable'=>true)); ?></div></div>
	</div>
	<div id="container" class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div id="header">
					<h1><?php echo $this->Html->link($cakeDescription, '/'); ?></h1>
				</div>

				<div id="content">
					<div class="row-fluid">
						<div class="span3">
							<div class="sidebar well">
								<ul class="nav nav-list">
									<?php echo $this->fetch('sidebar'); ?>&nbsp;
								</ul>
							</div>
						</div>
						<div class="span9">
							<?php echo $this->fetch('content'); ?>&nbsp;
						</div>
					</div>
				</div>
				<div id="footer">
					<?php echo $this->Html->link(
							$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
							'http://www.cakephp.org/',
							array('target' => '_blank', 'escape' => false)
						);
					?>
				</div>
			</div>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
