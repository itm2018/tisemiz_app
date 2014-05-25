<?php
/**
 * DoanhNghiepFixture
 *
 */
class DoanhNghiepFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'doanh_nghiep';

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
		'colDienThoai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colFax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colEmail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colSoTKhoan' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colX' => array('type' => 'float', 'null' => true, 'default' => null),
		'colY' => array('type' => 'float', 'null' => true, 'default' => null),
		'colNamHopDong' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colGiayPhepDT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colGiayPhepKD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colLoaiHinhDN' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colMaNganh1' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colMaNganh2' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colMaNganh3' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colMaNganh4' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colMaNganh5' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colMaNganh6' => array('type' => 'integer', 'null' => false, 'default' => null),
		'colLinhVucHD' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colSanPham' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colCongSuat' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colQuocGia' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colQTrinhSX' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colMoTaKT' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colMoTaNT' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colMoTaRT' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colGhiChu' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colDienThoai' => 'Lorem ipsum dolor sit amet',
			'colFax' => 'Lorem ipsum dolor sit amet',
			'colEmail' => 'Lorem ipsum dolor sit amet',
			'colSoTKhoan' => 'Lorem ipsum dolor sit amet',
			'colX' => 1,
			'colY' => 1,
			'colNamHopDong' => '2014-05-23 11:28:41',
			'colGiayPhepDT' => 'Lorem ipsum dolor sit amet',
			'colGiayPhepKD' => 'Lorem ipsum dolor sit amet',
			'colLoaiHinhDN' => 1,
			'colMaNganh1' => 1,
			'colMaNganh2' => 1,
			'colMaNganh3' => 1,
			'colMaNganh4' => 1,
			'colMaNganh5' => 1,
			'colMaNganh6' => 1,
			'colLinhVucHD' => 'Lorem ipsum dolor sit amet',
			'colSanPham' => 'Lorem ipsum dolor sit amet',
			'colCongSuat' => 'Lorem ipsum dolor sit amet',
			'colQuocGia' => 1,
			'colQTrinhSX' => 'Lorem ipsum dolor sit amet',
			'colMoTaKT' => 'Lorem ipsum dolor sit amet',
			'colMoTaNT' => 'Lorem ipsum dolor sit amet',
			'colMoTaRT' => 'Lorem ipsum dolor sit amet',
			'colGhiChu' => 'Lorem ipsum dolor sit amet',
			'colHinhAnh' => 'Lorem ipsum dolor sit amet'
		),
	);

}
