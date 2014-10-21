<?php
/**
 * NstatsLeadFixture
 *
 */
class NstatsLeadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'datep' => array('type' => 'date', 'null' => false, 'default' => null),
		'CoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'CaID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'BaID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'numLeads' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'stat' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4, 'unsigned' => false),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'datep' => '2014-10-21',
			'CoID' => 1,
			'CaID' => 1,
			'BaID' => 1,
			'numLeads' => '',
			'stat' => 1,
			'updated' => '2014-10-21 09:03:01'
		),
	);

}
