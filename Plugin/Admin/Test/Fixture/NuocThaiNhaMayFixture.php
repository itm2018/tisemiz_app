<?php
/**
 * NuocThaiNhaMayFixture
 *
 */
class NuocThaiNhaMayFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'nuoc_thai_nha_may';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colThoiGian' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colNguonThai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colLLuongThai' => array('type' => 'float', 'null' => true, 'default' => null),
		'colNguonPSinh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colLLXLyTK' => array('type' => 'float', 'null' => true, 'default' => null),
		'colLLXLyTT' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'colThoiGian' => '2014-05-23 11:28:43',
			'colNguonThai' => 'Lorem ipsum dolor sit amet',
			'colLLuongThai' => 1,
			'colNguonPSinh' => 'Lorem ipsum dolor sit amet',
			'colLLXLyTK' => 1,
			'colLLXLyTT' => 1
		),
	);

}
