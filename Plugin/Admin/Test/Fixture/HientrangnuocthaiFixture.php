<?php
/**
 * HientrangnuocthaiFixture
 *
 */
class HientrangnuocthaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hientrangnuocthai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'stt' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'loainuocthai' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'donvi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quy1' => array('type' => 'float', 'null' => true, 'default' => null),
		'quy2' => array('type' => 'float', 'null' => true, 'default' => null),
		'quy3' => array('type' => 'float', 'null' => true, 'default' => null),
		'quy4' => array('type' => 'float', 'null' => true, 'default' => null),
		'tong' => array('type' => 'float', 'null' => true, 'default' => null),
		'ghichu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'chucnang' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_bc' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'stt' => 1,
			'loainuocthai' => 'Lorem ipsum dolor sit amet',
			'donvi' => 'Lorem ipsum dolor sit amet',
			'quy1' => 1,
			'quy2' => 1,
			'quy3' => 1,
			'quy4' => 1,
			'tong' => 1,
			'ghichu' => 'Lorem ipsum dolor sit amet',
			'chucnang' => 'Lorem ipsum dolor sit amet',
			'id_bc' => 1
		),
	);

}
