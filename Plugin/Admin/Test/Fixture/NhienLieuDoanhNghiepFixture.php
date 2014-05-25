<?php
/**
 * NhienLieuDoanhNghiepFixture
 *
 */
class NhienLieuDoanhNghiepFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'nhien_lieu_doanh_nghiep';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colNhienLieu' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colDonVi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colLuongSD' => array('type' => 'float', 'null' => true, 'default' => null),
		'colSoNgaySD' => array('type' => 'float', 'null' => true, 'default' => null),
		'colMDichSD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colNam' => '2014-05-23 11:28:43',
			'colNhienLieu' => 1,
			'colDonVi' => 'Lorem ipsum dolor sit amet',
			'colLuongSD' => 1,
			'colSoNgaySD' => 1,
			'colMDichSD' => 'Lorem ipsum dolor sit amet'
		),
	);

}
