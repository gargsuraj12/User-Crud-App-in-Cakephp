<?php
    
App::uses('AppController', 'Controller');

class UsersController extends AppController{
    public $helpers = array('Html', 'Form');
    // public $user = null;
    private $loginUser = 'loginUser';

    private function validUser($username, $password){
        $sql = "select * from users where username='".$username."' and password='".$password."';";
        $user = $this->User->query($sql)[0];
        // print_r($res);
        if(!empty($user)){
            return $user;
        }
        return null;
    }

    public function login(){
        $user = null;
        $this->Session->write($this->loginUser, null);
        if($this->request->is('post')){
            $data = $this->request->data;
            $username = $data["User"]["username"];
            $password = $data["User"]["password"];

            $user = $this->validUser($username, $password);
            // print_r($user['users']);
            if($user == null){
                // echo "Login unsuccessful<br>";
                $this->Flash->error(__('Username or Password is incorrect!!'));
                return $this->redirect(['action' => 'login']);
                // return;
            }
            //Create session here
            echo "Login successful<br>";
            // $this->Session->write('username', $username);
            $this->Session->write($this->loginUser, $user['users']);
            // $this->Flash->success('Login Successful',['key' => 'message']);
            return $this->redirect(['action' => 'index']);
            // return;
        }
        else{
            $this->set('user', $user);
        }

        // if($this->reques->is('post')){
        //     if($this->Auth->login()){ 
        //         //login success
        //         $this->redirect($this->Auth->redirect());
        //     }
        //     else{
        //         $this->Session->setFlash('Username or password is incorrect !!');
        //     }
        // }
    }

    public function logout(){
        $this->Session->write($this->loginUser, null);
        $this->Flash->success('Logout Successful',['key' => 'message']);
        return $this->redirect(['action' => 'login']);
        // $this->redirect($this->Auth->logout());
    }

    private function isLogin(){
        if($this->Session->read($this->loginUser) == null){
            return false;
        }
        return true;
    }

    public function index(){
        if(!$this->isLogin()){
            $this->Flash->error(__('Please login first to access this page !!'));
            return $this->redirect(['action' => 'login']);
        }
        $users = $this->User->find('all');
        $this->set('users', $users);
    }

    private function isUsernameAvailable($username){
        $sql = "select fname from users where username='".$username."';";
        $user = $this->User->query($sql);
        if(!empty($res)){
            return null;
        }
        return $user;
    }

    public function add(){
        $user = NULL;
        if($this->request->is('post')){
            // echo "Processing post request<br>";
            $user = $this->request->data;

            $username = $user["User"]["username"];
            $password = $user["User"]["password"];
            $fname = $user["User"]["fname"];
            $lname = $user["User"]["lname"];
            $details = $user["User"]["details"];
            // print_r($user);

            $user = $this->isUsernameAvailable($username);

            if($user != null){
                $this->Flash->error(__('Username not available!!'));
                return;
            }


            $sql_query = "INSERT INTO users(username, password, fname, lname, details) VALUES ('".$username."','".$password."','".$fname."','".$lname."','".$details."');";

            // $user = $this->User->query($sql_query);
            $this->User->query($sql_query);
            $this->Flash->success('User added successfully',['key' => 'message']);
            return $this->redirect(['action' => 'login']);
        }
        $this->set('user', $user);
    }

    public function edit($id){
        if(!$this->isLogin()){
            $this->Flash->error(__('Please login first to access this page !!'));
            return $this->redirect(['action' => 'login']);
        }
        $sql_query = "";
        $sql_query = "SELECT * FROM users WHERE id=".$id.";";
        $user = $this->User->query($sql_query)[0]["users"];
        // echo $user["users"]["id"];
        $this->set('user', $user);
        // print_r($user);

        // $user = $this->request->data;
        if($this->request->is('post')){
            $user = $this->request->data;
            // echo "Processing post request<br>";
            
            $username = $user["User"]["username"];
            $fname = $user["User"]["fname"];
            $lname = $user["User"]["lname"];
            $details = $user["User"]["details"];

            
            $res = null;
            $sql_query = "UPDATE users SET username='".$username."', fname='".$fname."', lname='".$lname."', details='".$details."' WHERE id=".$id.";";
            $res = $this->User->query($sql_query);
            if($res != null){
                $this->Flash->success('User Edited successfully',['key' => 'message']);
            }
            else{
                $this->Flash->success('Database error: Unable to edit user !!',['key' => 'message']);
            }
            return $this->redirect(['action' => 'index']);
        }    
        $this->set('user', $user);
    }

    public function delete($id){
        if(!$this->isLogin()){
            $this->Flash->error(__('Please login first to access this page !!'));
            return $this->redirect(['action' => 'login']);
        }
        if($this->request->is('post')){
            // echo "User to be deleted: ".$id."<br>";
            $res = null;
            $sql_query = "DELETE FROM users WHERE id=".$id.";";
            $res = $this->User->query($sql_query);
            // if($res != null){
            //     if($id == $this->Session->read('loginUser')["id"]){
            //         $this->logout();
            //     }
            //     $this->Flash->success('User deleted successfully',['key' => 'message']);
            // }
            // else{
            //     $this->Flash->success('Database error: Unable to delete user !!',['key' => 'message']);
            // }
            if($id == $this->Session->read('loginUser')["id"]){
                $this->logout();
            }
            $this->Flash->success('User deleted successfully',['key' => 'message']);
            // return $this->redirect(['action' => 'index']);
        }
        return $this->redirect(['action' => 'index']);
    }
}