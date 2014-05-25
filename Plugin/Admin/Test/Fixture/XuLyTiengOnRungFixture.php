<?php
/**
 * XuLyTiengOnRungFixture
 *
 */
class XuLyTiengOnRungFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'xu_ly_tieng_on_rung';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'colMa' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'colNam' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'colCSSX' => array('type' => 'integer', 'null' => true, 'default' => null),
		'colNguonGayOn' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colNguonPSinh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colKhongXLy' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colCheChan' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colBocCachAm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'colBienPhapKhac' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'colNguonGayOn' => 'Lorem ipsum dolor sit amet',
			'colNguonPSinh' => 'Lorem ipsum dolor sit amet',
			'colKhongXLy' => 1,
			'colCheChan' => 1,
			'colBocCachAm' => 1,
			'colBienPhapKhac' => 'Lorem ipsum dolor sit amet'
		),
	);

}
