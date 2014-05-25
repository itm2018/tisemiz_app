<?php
/**
 * NguonThaiNuocThaiFixture
 *
 */
class NguonThaiNuocThaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'nguon_thai_nuoc_thai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colTenNguonThai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colTenNguonThai' => 'Lorem ip',
			'colGhiChu' => 'Lorem ipsum dolor sit amet'
		),
	);

}
