<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'OffSpickBackend - Basis für einen effizienten Einsatz!');
$cakeCopyright = __d('','Erstellt von Michael Ott, Fw WiBe, 2013');

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">

		<div id="header">
        <h1><?php echo $this->Html->link($cakeDescription, 'http://www.feuerwehr-wiesendangen.ch'); ?></h1>
        		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

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


			  <?php echo $this->fetch('content'); ?>
        
		</div>
		<div id="footer">
             <?php echo $cakeCopyright; ?>
             
		</div>
	</div>
	 <?php /* echo $this->element('sql_dump');*/?>
</body>
</html>
