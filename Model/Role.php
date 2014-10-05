<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 */
class Role extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'role';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rolename';

	public $actsAs=array('Acl'=>array('type'=>'requester'));

	public function parentNode(){
		return null;
	}
}
