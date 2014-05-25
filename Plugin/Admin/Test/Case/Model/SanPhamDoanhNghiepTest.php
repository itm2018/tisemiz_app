<?php
App::uses('SanPhamDoanhNghiep', 'Admin.Model');

/**
 * SanPhamDoanhNghiep Test Case
 *
 */
class SanPhamDoanhNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.san_pham_doanh_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SanPhamDoanhNghiep = ClassRegistry::init('Admin.SanPhamDoanhNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SanPhamDoanhNghiep);

		parent::tearDown();
	}

}
