<?php
/**
 * ContactFixture
 *
 */
class ContactFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Description' => array('type' => 'string', 'null' => false, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Sort' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'ValidFrom' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'ValidTo' => array('type' => 'datetime', 'null' => false, 'default' => '2100-01-01 00:00:00'),
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
			'Name' => 'Lorem ipsum dolor sit amet',
			'Description' => 'Lorem ipsum dolor sit amet',
			'Sort' => 1,
			'ValidFrom' => '2013-06-09 02:16:21',
			'ValidTo' => '2013-06-09 02:16:21'
		),
	);

}
