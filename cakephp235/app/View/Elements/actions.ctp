<div class="actions">
	<h3><?php echo __('Benutzerverwaltung'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Benutzer anzeigen'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Neuer Benutzer'), array('controller' => 'users', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Benutzergruppen'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue Benutzergruppe'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
       	<br>
        <h3><?php echo __('Telefonverzeichnis'); ?></h3>
	<ul>
        <li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Contact Numbers'), array('controller' => 'contact_numbers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Contact Number'), array('controller' => 'contact_numbers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Category Contacts'), array('controller' => 'category_contacts', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Category Contact'), array('controller' => 'category_contacts', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
    	<br> 
        <h3><?php echo __('Infos'); ?></h3>
	<ul>
    	<li><?php echo $this->Html->link(__('Infos anzeigen'), array('controller' => 'InfoMessages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue Info'), array('controller' => 'InfoMessages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Kategorien anzeigen'), array('controller' => 'InfoCategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue Kategorie'), array('controller' => 'InfoCategories', 'action' => 'add')); ?> </li>
	</ul>
    	<br>
        <br>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>

</div>