<?php
/**
 * NewsFixture
 *
 */
class NewsFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'News';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'message' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'News_categorie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'valid_from' => array('type' => 'datetime', 'null' => false, 'default' => '2000-01-01 00:00:00'),
		'valid_to' => array('type' => 'datetime', 'null' => false, 'default' => '2100-01-01 00:00:00'),
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
			'message' => 'Lorem ipsum dolor sit amet',
			'News_categorie_id' => 1,
			'valid_from' => '2013-06-06 21:34:45',
			'valid_to' => '2013-06-06 21:34:45',
			'created' => '2013-06-06 21:34:45',
			'modified' => '2013-06-06 21:34:45'
		),
	);

}
