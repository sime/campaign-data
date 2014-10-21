<?php
App::uses('NstatsImp', 'Model');

/**
 * NstatsImp Test Case
 *
 */
class NstatsImpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nstats_imp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NstatsImp = ClassRegistry::init('NstatsImp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NstatsImp);

		parent::tearDown();
	}

}
