<?php
/**
 * DienNuocDoanhNghiepFixture
 *
 */
class DienNuocDoanhNghiepFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'dien_nuoc_doanh_nghiep';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colLoaiTThu' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colLuongSD' => array('type' => 'float', 'null' => true, 'default' => null),
		'colSoNgaySuDung' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'colLoaiTThu' => 1,
			'colLuongSD' => 1,
			'colSoNgaySuDung' => 1
		),
	);

}
