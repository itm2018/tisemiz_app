<?php
App::uses('HoatDongSanXuat', 'Admin.Model');

/**
 * HoatDongSanXuat Test Case
 *
 */
class HoatDongSanXuatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.hoat_dong_san_xuat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HoatDongSanXuat = ClassRegistry::init('Admin.HoatDongSanXuat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HoatDongSanXuat);

		parent::tearDown();
	}

}
