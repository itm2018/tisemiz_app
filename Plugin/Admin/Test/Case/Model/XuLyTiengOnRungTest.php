<?php
App::uses('XuLyTiengOnRung', 'Admin.Model');

/**
 * XuLyTiengOnRung Test Case
 *
 */
class XuLyTiengOnRungTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.xu_ly_tieng_on_rung'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->XuLyTiengOnRung = ClassRegistry::init('Admin.XuLyTiengOnRung');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->XuLyTiengOnRung);

		parent::tearDown();
	}

}
