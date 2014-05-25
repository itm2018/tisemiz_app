<?php
/**
 * SanPhamDoanhNghiepFixture
 *
 */
class SanPhamDoanhNghiepFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'san_pham_doanh_nghiep';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colSanPham' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colDVi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colCongSuatTK' => array('type' => 'float', 'null' => true, 'default' => null),
		'colCongSuatTT' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'colNam' => '2014-05-23 11:28:44',
			'colSanPham' => 'Lorem ipsum dolor sit amet',
			'colDVi' => 'Lorem ipsum dolor sit amet',
			'colCongSuatTK' => 1,
			'colCongSuatTT' => 1
		),
	);

}
