<?php
    
App::uses('AppController', 'Controller');

class UsersController extends AppController{
    public $helpers = array('Html', 'Form');

    public function index(){
        $users = $this->User->find('all');
        $this->set('users', $users);
    }

    public function add(){
        $user = NULL;
        if($this->request->is('post')){
            // echo "Processing post request<br>";
            $user = $this->request->data;
            // print_r($user);

            $fname = $user["User"]["fname"];
            $lname = $user["User"]["lname"];
            $details = $user["User"]["details"];

            $sql_query = "INSERT INTO users(fname, lname, details) VALUES ('".$fname."','".$lname."','".$details."');";

            $user = $this->User->query($sql_query);
            $this->Flash->success('User added successfully',['key' => 'message']);
            return $this->redirect(['action' => 'index']);

            // print_r($user);
            // if(!empty($user)){
            //     echo "added success..<br>";
            // //     $this->Flash->success('User added successfully',['key' => 'message']);
            // //     return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('Failed to add user!!'));
        }
        $this->set('user', $user);
    }

    public function edit($id = Null){
        // $user = $this->User->get($id);
        $sql_query = "SELECT * FROM users WHERE id=".$id.";";
        $user = $this->User->query($sql_query);
        $this->set('user', $user);
        // print_r($user);

        $user = $this->request->data;
        if($this->request->is('post')){
            // $user = $this->request->data;
            // echo "Processing post request<br>";
            
            
            $fname = $user["User"]["fname"];
            $lname = $user["User"]["lname"];
            $details = $user["User"]["details"];

            
            $edited = false;
            
            if(!empty($fname)){
                // echo "First Name to be updated<br>";
                $sql_query = "UPDATE users SET fname='".$fname."' WHERE id=".$id.";";
                $this->User->query($sql_query);
                $edited = true;
            }
            if(!empty($lname)){
                // echo "Last Name to be updated<br>";
                $sql_query = "UPDATE users SET lname='".$lname."' WHERE id=".$id.";";
                $this->User->query($sql_query);
                $edited = true;
            }
            if(!empty($details)){
                // echo "Details to be updated<br>";
                $sql_query = "UPDATE users SET details='".$details."' WHERE id=".$id.";";
                $this->User->query($sql_query);
                $edited = true;
            }
            if($edited){
                $this->Flash->success('User Edited successfully',['key' => 'message']);
            }
            return $this->redirect(['action' => 'index']);
        }    
    }

    public function delete($id){
        
        if($this->request->is('post')){
            // echo "User to be deleted: ".$id."<br>";

            $sql_query = "DELETE FROM users WHERE id=".$id.";";
            $this->User->query($sql_query);
            $this->Flash->success('User deleted successfully',['key' => 'message']);
            return $this->redirect(['action' => 'index']);
        }
        // return $this->redirect(['action' => 'index']);
    }
}

?>