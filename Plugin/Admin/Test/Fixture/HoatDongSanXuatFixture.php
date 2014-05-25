<?php
/**
 * HoatDongSanXuatFixture
 *
 */
class HoatDongSanXuatFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hoat_dong_san_xuat';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colDTichDat' => array('type' => 'float', 'null' => true, 'default' => null),
		'colDienTichDatXD' => array('type' => 'float', 'null' => true, 'default' => null),
		'colNVienTT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colNVienGT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colSoCaSX' => array('type' => 'float', 'null' => true, 'default' => null),
		'colSuatAn' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colQTrinhSX' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colCSSX' => 1,
			'colNam' => '2014-05-23 11:28:41',
			'colDTichDat' => 1,
			'colDienTichDatXD' => 1,
			'colNVienTT' => 'Lorem ipsum dolor sit amet',
			'colNVienGT' => 'Lorem ipsum dolor sit amet',
			'colSoCaSX' => 1,
			'colSuatAn' => 'Lorem ipsum dolor sit amet',
			'colQTrinhSX' => 'Lorem ipsum dolor sit amet'
		),
	);

}
