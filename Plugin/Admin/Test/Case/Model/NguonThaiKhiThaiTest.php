<?php
App::uses('NguonThaiKhiThai', 'Admin.Model');

/**
 * NguonThaiKhiThai Test Case
 *
 */
class NguonThaiKhiThaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.nguon_thai_khi_thai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NguonThaiKhiThai = ClassRegistry::init('Admin.NguonThaiKhiThai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NguonThaiKhiThai);

		parent::tearDown();
	}

}
