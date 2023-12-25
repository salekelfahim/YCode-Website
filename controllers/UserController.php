<?php

class UserController{
    public function getAllUser(){
        $user = User::getAll();
        return $user;
    }
    public function deleteUser($id){
        echo "im here";
        echo "$id";
            $result= User::delete($id);
            var_dump($result);
            if ($result === 'ok'){
                Redirect::to('home');
            }else {
                echo "Error";
            }
        }

}
?>