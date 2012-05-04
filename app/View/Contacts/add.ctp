<div class="contacts form">

<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
		echo $this->TwitterBootstrap->input('name');
		echo $this->TwitterBootstrap->input('phone');
		echo $this->TwitterBootstrap->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
