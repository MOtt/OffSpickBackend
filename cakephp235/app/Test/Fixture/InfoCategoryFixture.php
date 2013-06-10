<?php
/**
 * InfoCategoryFixture
 *
 */
class InfoCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'valid_from' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'valid_to' => array('type' => 'datetime', 'null' => false, 'default' => '2100-01-01 00:00:00'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'name' => array('column' => 'name', 'unique' => 1)
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
			'valid_from' => '2013-06-06 22:29:25',
			'valid_to' => '2013-06-06 22:29:25',
			'created' => '2013-06-06 22:29:25',
			'modified' => '2013-06-06 22:29:25'
		),
	);

}
