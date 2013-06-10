<?php
App::uses('InfoCategory', 'Model');

/**
 * InfoCategory Test Case
 *
 */
class InfoCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.info_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InfoCategory = ClassRegistry::init('InfoCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InfoCategory);

		parent::tearDown();
	}

}
