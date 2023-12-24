<?php

class UserController{
    public function getAllUser(){
        $user = User::getAll();
        return $user;
    }
    public function deleteUser(){
        
    }
}
?>