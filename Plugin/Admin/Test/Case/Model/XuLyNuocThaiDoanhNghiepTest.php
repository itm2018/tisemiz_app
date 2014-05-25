<?php
App::uses('XuLyNuocThaiDoanhNghiep', 'Admin.Model');

/**
 * XuLyNuocThaiDoanhNghiep Test Case
 *
 */
class XuLyNuocThaiDoanhNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.xu_ly_nuoc_thai_doanh_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->XuLyNuocThaiDoanhNghiep = ClassRegistry::init('Admin.XuLyNuocThaiDoanhNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->XuLyNuocThaiDoanhNghiep);

		parent::tearDown();
	}

}
