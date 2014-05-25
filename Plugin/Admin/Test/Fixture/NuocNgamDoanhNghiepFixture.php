<?php
/**
 * NuocNgamDoanhNghiepFixture
 *
 */
class NuocNgamDoanhNghiepFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'nuoc_ngam_doanh_nghiep';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colMaGK' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colViTri' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colX' => array('type' => 'float', 'null' => true, 'default' => null),
		'colY' => array('type' => 'float', 'null' => true, 'default' => null),
		'colCongSuat' => array('type' => 'float', 'null' => true, 'default' => null),
		'colLLuong' => array('type' => 'float', 'null' => true, 'default' => null),
		'colSoGiayPhep' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colCSSX' => 1,
			'colNam' => '2014-05-23 11:28:43',
			'colMaGK' => 'Lorem ipsum dolor sit amet',
			'colViTri' => 'Lorem ipsum dolor sit amet',
			'colX' => 1,
			'colY' => 1,
			'colCongSuat' => 1,
			'colLLuong' => 1,
			'colSoGiayPhep' => 'Lorem ipsum dolor sit amet',
			'colGhiChu' => 'Lorem ipsum dolor sit amet'
		),
	);

}
