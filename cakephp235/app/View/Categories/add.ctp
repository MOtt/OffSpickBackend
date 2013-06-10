<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('Text');
		echo $this->Form->input('Description');
		echo $this->Form->input('Sort');
		echo $this->Form->input('ValidFrom');
		echo $this->Form->input('ValidTo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>