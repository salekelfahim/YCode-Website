<?php

class UserController{
    public function getAllUser(){
        $user = User::getAll();
        return $user;
    }
    public function deleteUser(){
        echo "im here";
            $result= User::delete($_GET['id']);
            if ($result === 'ok'){
                Redirect::to('home');
            }else {
                echo "Error";
            }
        }

}
?>