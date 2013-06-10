<?php
App::uses('ContactNumber', 'Model');

/**
 * ContactNumber Test Case
 *
 */
class ContactNumberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contact_number',
		'app.contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContactNumber = ClassRegistry::init('ContactNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContactNumber);

		parent::tearDown();
	}

}
