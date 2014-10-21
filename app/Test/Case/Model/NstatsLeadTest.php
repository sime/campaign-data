<?php
App::uses('NstatsLead', 'Model');

/**
 * NstatsLead Test Case
 *
 */
class NstatsLeadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nstats_lead'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NstatsLead = ClassRegistry::init('NstatsLead');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NstatsLead);

		parent::tearDown();
	}

}
