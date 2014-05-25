<?php
App::uses('ChatThaiRanCongNghiep', 'Admin.Model');

/**
 * ChatThaiRanCongNghiep Test Case
 *
 */
class ChatThaiRanCongNghiepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.chat_thai_ran_cong_nghiep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ChatThaiRanCongNghiep = ClassRegistry::init('Admin.ChatThaiRanCongNghiep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ChatThaiRanCongNghiep);

		parent::tearDown();
	}

}
