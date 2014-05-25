<?php
App::uses('NhienLieuDoanhNghiep', 'Admin.Model');

/**
 * NhienLieuDoanhNghiep Test Case
 *
 */
class NhienLieuDoanhNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.nhien_lieu_doanh_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NhienLieuDoanhNghiep = ClassRegistry::init('Admin.NhienLieuDoanhNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NhienLieuDoanhNghiep);

		parent::tearDown();
	}

}
