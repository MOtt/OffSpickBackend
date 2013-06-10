<div class="infoCategories form">
<?php echo $this->Form->create('InfoCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Info Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>