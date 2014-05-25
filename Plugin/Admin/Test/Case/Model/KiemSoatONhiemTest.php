<?php
App::uses('KiemSoatONhiem', 'Admin.Model');

/**
 * KiemSoatONhiem Test Case
 *
 */
class KiemSoatONhiemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.kiem_soat_o_nhiem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KiemSoatONhiem = ClassRegistry::init('Admin.KiemSoatONhiem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KiemSoatONhiem);

		parent::tearDown();
	}

}
