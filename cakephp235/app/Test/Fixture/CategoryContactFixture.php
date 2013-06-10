<?php
/**
 * CategoryContactFixture
 *
 */
class CategoryContactFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'key' => 'index'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ContactID' => array('column' => 'contact_id', 'unique' => 0),
			'CategoryID' => array('column' => 'category_id', 'unique' => 0)
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
			'category_id' => 1
		),
	);

}
