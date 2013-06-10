<?php
/**
 * UserGroupFixture
 *
 */
class UserGroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'validfrom' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'validto' => array('type' => 'datetime', 'null' => false, 'default' => '2100-01-01 00:00:00'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor ',
			'validfrom' => '2013-06-07 00:31:51',
			'validto' => '2013-06-07 00:31:51',
			'created' => '2013-06-07 00:31:51',
			'modified' => '2013-06-07 00:31:51'
		),
	);

}
