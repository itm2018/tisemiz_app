<?php
/**
 * ChatThaiNguyHaiFixture
 *
 */
class ChatThaiNguyHaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'chat_thai_nguy_hai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colDangCT' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colKLDVi' => array('type' => 'float', 'null' => true, 'default' => null),
		'colNguon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colHThucLuu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colBanRa' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colThueThaiBo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colDViThuMua' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colDKyThuMua' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colNam' => '2014-05-23 11:28:40',
			'colCSSX' => 1,
			'colDangCT' => 1,
			'colKLDVi' => 1,
			'colNguon' => 'Lorem ipsum dolor sit amet',
			'colHThucLuu' => 'Lorem ipsum dolor sit amet',
			'colBanRa' => 1,
			'colThueThaiBo' => 1,
			'colDViThuMua' => 'Lorem ipsum dolor sit amet',
			'colDKyThuMua' => 'Lorem ipsum dolor sit amet',
			'colGhiChu' => 'Lorem ipsum dolor sit amet'
		),
	);

}
