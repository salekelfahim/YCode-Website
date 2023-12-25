<?php

class UserController{
    public function getAllUser(){
        $user = User::getAll();
        return $user;
    }
    public function deleteUser($id){
            $result= User::delete($id);
        if($result){
            header('location:./index');
        }
        return $result;
        }
        public function addUser(){
                    $newuser = array(
                        'firstName' => $_POST['fname'],
                        'lastName' => $_POST['lname'],
                        'email' => $_POST['email'],
                        'password' => $_POST['password'],
                        'role' => $_POST['role'],
                    );
                $add = User::add($newuser);
                if($add){
                    header('location:./index');
                }
                return $add;
            }


}
?>