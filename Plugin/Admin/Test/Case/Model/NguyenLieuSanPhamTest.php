<?php
App::uses('NguyenLieuSanPham', 'Admin.Model');

/**
 * NguyenLieuSanPham Test Case
 *
 */
class NguyenLieuSanPhamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.nguyen_lieu_san_pham'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NguyenLieuSanPham = ClassRegistry::init('Admin.NguyenLieuSanPham');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NguyenLieuSanPham);

		parent::tearDown();
	}

}
