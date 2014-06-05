<?php
/**
 * User: cahs
 * Date: 6/5/14
 * Time: 2:34 PM
 */
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher','Controller/Component/Auth');
class User extends AppModel
{
    public $name = 'User';
    public $useTable = 'user';

    public function beforeSave($options = array())
    {

        if (!empty($this->data['User']['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
        }
        return true;
    }

    public $validate = array(
        'username' => array(
            'rule' => 'alphaNumeric',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'This is not a valid email address'
        ),
        'email' => array(
            'rule' => 'email',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'This is not a valid email address'
        ),
        'password' => array(
            'equal' => array(
                'rule' => array('checkEqual'),
                'message' => 'Please confirm exactly your password'
            )
        )
    );

    public function checkEqual($check)
    {
        $value = array_values($check);
        $value = $value[0];
        return ($value == $this->data['User']['confirm_password']);
    }
}