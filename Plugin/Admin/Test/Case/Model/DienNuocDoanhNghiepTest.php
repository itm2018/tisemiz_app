<?php
App::uses('DienNuocDoanhNghiep', 'Admin.Model');

/**
 * DienNuocDoanhNghiep Test Case
 *
 */
class DienNuocDoanhNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.dien_nuoc_doanh_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DienNuocDoanhNghiep = ClassRegistry::init('Admin.DienNuocDoanhNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DienNuocDoanhNghiep);

		parent::tearDown();
	}

}
