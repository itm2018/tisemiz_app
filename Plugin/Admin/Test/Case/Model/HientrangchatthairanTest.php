<?php
App::uses('Hientrangchatthairan', 'Admin.Model');

/**
 * Hientrangchatthairan Test Case
 *
 */
class HientrangchatthairanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.hientrangchatthairan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hientrangchatthairan = ClassRegistry::init('Admin.Hientrangchatthairan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hientrangchatthairan);

		parent::tearDown();
	}

}
