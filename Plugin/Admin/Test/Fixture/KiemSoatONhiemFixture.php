<?php
/**
 * KiemSoatONhiemFixture
 *
 */
class KiemSoatONhiemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'kiem_soat_o_nhiem';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colNguonThai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colNguonPSinh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colBPhapXL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colGhiChu' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'colMa', 'unique' => 1)
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
			'colMa' => 1,
			'colNam' => '2014-05-23 11:28:42',
			'colCSSX' => 1,
			'colNguonThai' => 'Lorem ipsum dolor sit amet',
			'colNguonPSinh' => 'Lorem ipsum dolor sit amet',
			'colBPhapXL' => 'Lorem ipsum dolor sit amet',
			'colGhiChu' => 'Lorem ipsum dolor sit amet'
		),
	);

}
