<?php
App::uses('Model', 'Model');

class User extends AppModel{
    public $name = 'User';
    public $useTable = 'users';
    public $primaryKey = 'id';
}

?>