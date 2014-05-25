<?php
/**
 * RacThaiSinhHoatFixture
 *
 */
class RacThaiSinhHoatFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'rac_thai_sinh_hoat';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colDangCThai' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colTongKL' => array('type' => 'float', 'null' => true, 'default' => null),
		'colNguonPSinh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colHThucLuu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colBanRa' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colThaiBo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colDViThuMua' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colDinhKyThuMua' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colDangCThai' => 1,
			'colTongKL' => 1,
			'colNguonPSinh' => 'Lorem ipsum dolor sit amet',
			'colHThucLuu' => 'Lorem ipsum dolor sit amet',
			'colBanRa' => 1,
			'colThaiBo' => 1,
			'colDViThuMua' => 'Lorem ipsum dolor sit amet',
			'colDinhKyThuMua' => 'Lorem ipsum dolor sit amet'
		),
	);

}
