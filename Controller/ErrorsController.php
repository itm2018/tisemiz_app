<?php
class ErrorsController extends AppController{
	public $name = 'Errors';
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(array('error404','session_expire'));
	}
	public function error404(){
		$this->layout = 'default';
	}
	public function session_expire(){
		$this->layout = 'default';
	}
}