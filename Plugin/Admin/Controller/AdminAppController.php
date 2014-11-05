<?php

App::uses('AppController', 'Controller');

class AdminAppController extends AppController {

	public $helpers = array('Html', 'Form');
    public $components = array('Paginator');
    public function beforeFiler() {
        parent::beforeFilter();
    }
}
