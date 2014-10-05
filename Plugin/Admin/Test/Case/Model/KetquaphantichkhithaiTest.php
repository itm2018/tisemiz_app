<?php
App::uses('Ketquaphantichkhithai', 'Admin.Model');

/**
 * Ketquaphantichkhithai Test Case
 *
 */
class KetquaphantichkhithaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.ketquaphantichkhithai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ketquaphantichkhithai = ClassRegistry::init('Admin.Ketquaphantichkhithai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ketquaphantichkhithai);

		parent::tearDown();
	}

}
