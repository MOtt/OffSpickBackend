<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Name' => array('type' => 'string', 'null' => false, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EMail' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ValidFrom' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'ValidTo' => array('type' => 'datetime', 'null' => false, 'default' => '2100-01-01 00:00:00'),
		'user_group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'admin_user' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Username' => array('column' => 'username', 'unique' => 1),
			'username_2' => array('column' => 'username', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'Lore',
			'Name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'EMail' => 'Lorem ipsum dolor sit amet',
			'ValidFrom' => '2013-06-07 00:30:33',
			'ValidTo' => '2013-06-07 00:30:33',
			'user_group_id' => 1,
			'created' => '2013-06-07 00:30:33',
			'modified' => '2013-06-07 00:30:33',
			'admin_user' => 1
		),
	);

}
