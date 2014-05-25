<?php
/**
 * XuLyNuocThaiDoanhNghiepFixture
 *
 */
class XuLyNuocThaiDoanhNghiepFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'xu_ly_nuoc_thai_doanh_nghiep';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colBPhapXL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colNTSHoat' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colNTSX' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colXLKT' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colLamNguoi' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colNguonKhac' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colNam' => '2014-05-23 11:28:44',
			'colCSSX' => 1,
			'colBPhapXL' => 'Lorem ipsum dolor sit amet',
			'colNTSHoat' => 1,
			'colNTSX' => 1,
			'colXLKT' => 1,
			'colLamNguoi' => 1,
			'colNguonKhac' => 'Lorem ipsum dolor sit amet',
			'colGhiChu' => 'Lorem ipsum dolor sit amet'
		),
	);

}
