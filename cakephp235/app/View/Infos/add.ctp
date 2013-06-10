<div class="infos form">
<?php echo $this->Form->create('Info'); ?>
	<fieldset>
		<legend><?php echo __('Add Info'); ?></legend>
	<?php
		echo $this->Form->input('message');
		echo $this->Form->input('info_categorie_id');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
