<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	//public $helpers = array('Minify.Minify');
	public $components = array(
		'Session',
		'Security',
		'RequestHandler',
//        'Security' => array(
//            'csrfExpires' => '+1 hour',
//            'csrfUseOne' => false
//        ),
		'Auth' => array(
			'loginRedirect' => array(
				'plugin' => 'admin',
				'controller' => 'dashboards',
				'action' => 'index'
			),
			'logoutRedirect' => array(
				'controller' => 'users',
				'action' => 'login',
				'home'
			),
			'loginAction' => array(
				'plugin' => null,
				'controller' => 'users',
				'action' => 'login',
			),
			'authError' => 'Did you really think you are allowed to see that?',
			'authenticate' => array(
				'Form' => array(
					'userModel' => 'User',
					'passwordHasher' => array(
						'className' => 'Simple',
						'hashType' => 'sha256'
					),
					'fields' => array('username' => 'username', 'password' => 'password'),
					'scope' => array('User.status' => 1)
				)
			)
		),
		'Acl'
	);

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Security->blackHoleCallback = 'blackhole';
		$this->Security->validatePost = false;
		$this->Security->unlockedActions = array('dulieugiamsatmoitruong');
		$this->Auth->allow(array('register', 'success', 'view'));
	}

	public function blackhole() {
		$this->redirect(array('plugin' => null, 'controller' => 'errors', 'action' => 'session_expire'));
	}

	public function any_action() {
		$aro = $this->Acl->Aro;
		$groups = array(
			0 => array(
				'alias' => 'warriors'
			),
			1 => array(
				'alias' => 'wizards'
			),
			2 => array(
				'alias' => 'hobbits'
			),
			3 => array(
				'alias' => 'visitors'
			)
		);
		foreach($groups as $data) {
			$aro->create();
			$aro->save($data);
		}
	}

}
