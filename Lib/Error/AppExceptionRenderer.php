<?php
App::uses('ExceptionRenderer','Error');

class AppExceptionRenderer extends ExceptionRenderer{
	public function notFound($error){
		$this->controller->redirect(array('controller'=>'Errors','action'=>'error404'));
	}
}