<?php
App::uses('ChatThaiNguyHai', 'Admin.Model');

/**
 * ChatThaiNguyHai Test Case
 *
 */
class ChatThaiNguyHaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.chat_thai_nguy_hai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ChatThaiNguyHai = ClassRegistry::init('Admin.ChatThaiNguyHai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ChatThaiNguyHai);

		parent::tearDown();
	}

}
