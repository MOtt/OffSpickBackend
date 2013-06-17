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
        <li><?php echo $this->Html->link(__('Kategorien anzeigen'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Neue Kategorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Kontakte anzeigen'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Neuer Kontakt'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Kontakt-Nummern anzeigen'), array('controller' => 'contact_numbers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Neue Kontakt-Nummer'), array('controller' => 'contact_numbers', 'action' => 'add')); ?> </li>

	</ul>
    	<br> 
        <h3><?php echo __('News'); ?></h3>
	<ul>
    	<li><?php echo $this->Html->link(__('News anzeigen'), array('controller' => 'NewsMessages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue News'), array('controller' => 'NewsMessages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Kategorien anzeigen'), array('controller' => 'NewsCategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue Kategorie'), array('controller' => 'NewsCategories', 'action' => 'add')); ?> </li>
	</ul>
    	<br>
        <br>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>

</div>