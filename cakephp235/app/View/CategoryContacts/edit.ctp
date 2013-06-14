<div class="categoryContacts form">
<?php echo $this->Form->create('CategoryContact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Category Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
