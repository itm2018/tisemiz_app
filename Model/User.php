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
           'notEmpty'=>array(
               'rule' => 'alphaNumeric',
               'required' => true,
               'allowEmpty' => false,
               'message' => 'Username contains just alphabet and number characters'
           ),
            'unique'=>array(
                'rule'=>'isUnique',
                'message'=>'A user with this username had been registered in the system'
            )
        ),
        'email' => array(
            'notEmpty'=>array(
                'rule' => 'email',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'This is not a valid email address'
            ),
            'unique'=>array(
                'rule'=>'isUnique',
                'message'=>'A user with this email had been registered in the system'
            )
        ),
        'password'=>array(
            'strength'=>array(
                'rule'=>'/(?=^.{6,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',
                'message'=>'Password must be at least 6 digits, contains at least 1 non-alphabet character, at least 1 uppercase letter and  at least 1 number'
            )
        ),
        'confirm_password' => array(
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
        return ($value == $this->data['User']['password']);
    }
}