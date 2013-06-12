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
    	<li><?php echo $this->Html->link(__('Kontakte anzeigen'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neuer Kontakt'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Kategorien anzeigen'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue Kategorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
    	<br> 
        <h3><?php echo __('Infos'); ?></h3>
	<ul>
    	<li><?php echo $this->Html->link(__('Infos anzeigen'), array('controller' => 'infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue Info'), array('controller' => 'infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Kategorien anzeigen'), array('controller' => 'infocategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Neue Kategorie'), array('controller' => 'infocategories', 'action' => 'add')); ?> </li>
	</ul>
    	<br>
        <br>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>

</div>