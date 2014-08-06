<?php

App::uses('AppController', 'Controller');

class AdminAppController extends AppController {

	public $helpers = array('Html', 'Form');

	public function beforeFiler() {
		parent::beforeFilter();
		$this->Security->validatePost = false;
		$this->Security->unlockedActions = array('dulieugiamsatmoitruong');
		$this->Security->blackHoleCallback = 'blackhole';
	}

	public function blackhole() {
		throw new NotFoundException('Trang bạn đang tìm không tồn tại');
	}

}
