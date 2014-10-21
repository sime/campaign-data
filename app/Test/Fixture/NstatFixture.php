<?php
/**
 * NstatFixture
 *
 */
class NstatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'datep' => array('type' => 'date', 'null' => true, 'default' => null),
		'CoID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'CaID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'BaID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'numImps' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'numLeads' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'datep' => '2014-10-21',
			'CoID' => 1,
			'CaID' => 1,
			'BaID' => 1,
			'numImps' => '',
			'numLeads' => ''
		),
	);

}
