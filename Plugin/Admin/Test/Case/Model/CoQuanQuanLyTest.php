<?php
App::uses('CoQuanQuanLy', 'Admin.Model');

/**
 * CoQuanQuanLy Test Case
 *
 */
class CoQuanQuanLyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.co_quan_quan_ly'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoQuanQuanLy = ClassRegistry::init('Admin.CoQuanQuanLy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoQuanQuanLy);

		parent::tearDown();
	}

}
