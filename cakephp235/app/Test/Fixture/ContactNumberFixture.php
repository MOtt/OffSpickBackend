<?php
/**
 * ContactNumberFixture
 *
 */
class ContactNumberFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'contact_number';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'key' => 'index'),
		'Phone' => array('type' => 'string', 'null' => false, 'length' => 17, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ValidFrom' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'ValidTo' => array('type' => 'datetime', 'null' => false, 'default' => '2100-01-01 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ContactID' => array('column' => 'contact_id', 'unique' => 0)
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
			'contact_id' => 1,
			'Phone' => 'Lorem ipsum dol',
			'ValidFrom' => '2013-06-09 02:17:41',
			'ValidTo' => '2013-06-09 02:17:41'
		),
	);

}
