<?php
/**
 * KetquaphantichkhithaiFixture
 *
 */
class KetquaphantichkhithaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ketquaphantichkhithai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'stt' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'thongsodo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'donvi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lan1' => array('type' => 'float', 'null' => true, 'default' => null),
		'lan2' => array('type' => 'float', 'null' => true, 'default' => null),
		'lan3' => array('type' => 'float', 'null' => true, 'default' => null),
		'lan4' => array('type' => 'float', 'null' => true, 'default' => null),
		'lan5' => array('type' => 'float', 'null' => true, 'default' => null),
		'lan6' => array('type' => 'float', 'null' => true, 'default' => null),
		'tong' => array('type' => 'float', 'null' => true, 'default' => null),
		'ghichu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'chucnang' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_bc' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'stt' => 1,
			'thongsodo' => 'Lorem ipsum dolor sit amet',
			'donvi' => 'Lorem ipsum dolor sit amet',
			'lan1' => 1,
			'lan2' => 1,
			'lan3' => 1,
			'lan4' => 1,
			'lan5' => 1,
			'lan6' => 1,
			'tong' => 1,
			'ghichu' => 'Lorem ipsum dolor sit amet',
			'chucnang' => 'Lorem ipsum dolor sit amet',
			'id_bc' => 1
		),
	);

}
