<?php
App::uses('CategoryContact', 'Model');

/**
 * CategoryContact Test Case
 *
 */
class CategoryContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category_contact',
		'app.contact',
		'app.contact_number',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoryContact = ClassRegistry::init('CategoryContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryContact);

		parent::tearDown();
	}

}
