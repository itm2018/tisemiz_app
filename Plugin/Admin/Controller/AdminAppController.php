<?php

App::uses('AppController', 'Controller');

class AdminAppController extends AppController {

    public $components = array('Paginator');
    public $helpers = array('Html', 'Form');

    public function beforeFiler() {
        parent::beforeFilter();
    }
}
