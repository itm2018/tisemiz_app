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

    function isAuthorized() {
        return true;
    }

    function beforeFilter() {
        parent::beforeFilter();
        $this->Security->blackHoleCallback = '_blackHole';
        //Here, we disable the Security component for Ajax requests
        if ($this->request->is('ajax') || $this->request->is('post') || $this->request->is('put')) {
            $this->Security->validatePost = false;
            $this->Security->enabled = false;
            $this->Security->csrfCheck = false;
        }
//		$this->Acl->allow();
        $this->Auth->authorize = 'Controller';
        $this->Auth->allow(array('register', 'success', 'view', 'index','chitiet','dodownload','lienhe'));
        $this->Security->unlockedActions = array('login', 'themmoi', 'themnguyenlieudoanhnghiep', 'xoacoso','get');
    }

    function _blackHole($error) {
        switch ($error) {
            case 'secure':
                $this->redirect('https://' . env('SERVER_NAME') . env('REQUEST_URI'));
                break;
            case 'login':
                // do something else
                break;
            default:
                throw new NotFoundException('Trang bạn đang tìm không tồn tại');
                break;
        }
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
        foreach ($groups as $data) {
            $aro->create();
            $aro->save($data);
        }
    }

}
