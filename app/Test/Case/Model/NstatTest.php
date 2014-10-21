<?php
App::uses('Nstat', 'Model');

/**
 * Nstat Test Case
 *
 */
class NstatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nstat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nstat = ClassRegistry::init('Nstat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nstat);

		parent::tearDown();
	}

}
