<?php
App::uses('NuocThaiNhaMay', 'Admin.Model');

/**
 * NuocThaiNhaMay Test Case
 *
 */
class NuocThaiNhaMayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.nuoc_thai_nha_may'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NuocThaiNhaMay = ClassRegistry::init('Admin.NuocThaiNhaMay');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NuocThaiNhaMay);

		parent::tearDown();
	}

}
