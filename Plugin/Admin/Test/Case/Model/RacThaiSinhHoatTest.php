<?php
App::uses('RacThaiSinhHoat', 'Admin.Model');

/**
 * RacThaiSinhHoat Test Case
 *
 */
class RacThaiSinhHoatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.rac_thai_sinh_hoat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RacThaiSinhHoat = ClassRegistry::init('Admin.RacThaiSinhHoat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RacThaiSinhHoat);

		parent::tearDown();
	}

}
