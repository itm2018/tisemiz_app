<?php
/**
 * KhuCongNghiepFixture
 *
 */
class KhuCongNghiepFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'khu_cong_nghiep';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colTen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colTenTAnh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colDiaChi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colDThoai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colFax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colEmail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colNamHDong' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colDienTich' => array('type' => 'float', 'null' => true, 'default' => null),
		'colSoCTy' => array('type' => 'float', 'null' => true, 'default' => null),
		'colSoCNhan' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colMoTa' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colHinhAnh' => array('type' => 'binary', 'null' => true, 'default' => null),
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
			'colTen' => 'Lorem ipsum dolor sit amet',
			'colTenTAnh' => 'Lorem ipsum dolor sit amet',
			'colDiaChi' => 'Lorem ipsum dolor sit amet',
			'colDThoai' => 'Lorem ipsum dolor sit amet',
			'colFax' => 'Lorem ipsum dolor sit amet',
			'colEmail' => 'Lorem ipsum dolor sit amet',
			'colNamHDong' => '2014-05-23 11:28:41',
			'colDienTich' => 1,
			'colSoCTy' => 1,
			'colSoCNhan' => 'Lorem ipsum dolor sit amet',
			'colMoTa' => 'Lorem ipsum dolor sit amet',
			'colHinhAnh' => 'Lorem ipsum dolor sit amet'
		),
	);

}
