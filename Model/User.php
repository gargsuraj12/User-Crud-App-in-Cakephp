<?php
App::uses('Model', 'Model');

class User extends AppModel{
    public $useTable = 'users';
    public $primaryKey = 'id';
}

?>