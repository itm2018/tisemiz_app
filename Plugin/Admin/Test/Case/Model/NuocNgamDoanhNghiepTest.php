<?php
App::uses('NuocNgamDoanhNghiep', 'Admin.Model');

/**
 * NuocNgamDoanhNghiep Test Case
 *
 */
class NuocNgamDoanhNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.nuoc_ngam_doanh_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NuocNgamDoanhNghiep = ClassRegistry::init('Admin.NuocNgamDoanhNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NuocNgamDoanhNghiep);

		parent::tearDown();
	}

}
