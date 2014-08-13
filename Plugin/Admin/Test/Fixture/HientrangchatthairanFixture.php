<?php
/**
 * HientrangchatthairanFixture
 *
 */
class HientrangchatthairanFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hientrangchatthairan';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id_loaichatthairan' => array('type' => 'integer', 'null' => false, 'default' => null),
		'stt' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'loaichatthai' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'donvi' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'thang1' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang2' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang3' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang4' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang5' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang6' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang7' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang8' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang9' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang10' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang11' => array('type' => 'float', 'null' => true, 'default' => null),
		'thang12' => array('type' => 'float', 'null' => true, 'default' => null),
		'donvithugomvanchuyen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tong' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'id_loaichatthairan' => 1,
			'stt' => 1,
			'loaichatthai' => 'Lorem ipsum dolor sit amet',
			'donvi' => 'Lorem ipsum dolor sit amet',
			'thang1' => 1,
			'thang2' => 1,
			'thang3' => 1,
			'thang4' => 1,
			'thang5' => 1,
			'thang6' => 1,
			'thang7' => 1,
			'thang8' => 1,
			'thang9' => 1,
			'thang10' => 1,
			'thang11' => 1,
			'thang12' => 1,
			'donvithugomvanchuyen' => 'Lorem ipsum dolor sit amet',
			'tong' => 1,
			'chucnang' => 'Lorem ipsum dolor sit amet',
			'id_bc' => 1
		),
	);

}
