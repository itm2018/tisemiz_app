<?php
App::uses('NguonThaiNuocThai', 'Admin.Model');

/**
 * NguonThaiNuocThai Test Case
 *
 */
class NguonThaiNuocThaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.nguon_thai_nuoc_thai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NguonThaiNuocThai = ClassRegistry::init('Admin.NguonThaiNuocThai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NguonThaiNuocThai);

		parent::tearDown();
	}

}
