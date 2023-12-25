<?php
//class User
//{
//    protected $user_id;
//    protected $first_name;
//    protected $last_name;
//    protected $email;
//    protected $password;
//    protected $role_id;
//
//    public function __construct($user_id, $first_name, $last_name, $email, $password, $role_id)
//    {
//        $this->user_id = $user_id;
//        $this->first_name = $first_name;
//        $this->last_name = $last_name;
//        $this->email = $email;
//        $this->password = $password;
//        $this->role_id = $role_id;
//    }
//    public function getUserId()
//    {
//        return $this->user_id;
//    }
//    public function setUserId($user_id)
//    {
//        $this->user_id = $user_id;
//    }
//    public function getFirstName()
//    {
//        return $this->first_name;
//    }
//    public function setFirstName($first_name)
//    {
//        $this->first_name = $first_name;
//    }
//    public function getLastName()
//    {
//        return $this->last_name;
//    }
//    public function setLastName($last_name)
//    {
//        $this->last_name = $last_name;
//    }
//    public function getEmail()
//    {
//        return $this->email;
//    }
//    public function setEmail($email)
//    {
//        $this->email = $email;
//    }
//    public function getPassword()
//    {
//        return $this->password;
//    }
//    public function setPassword($password)
//    {
//        $this->password = $password;
//    }
//    public function getRoleId()
//    {
//        return $this->role_id;
//    }
//    public function setRoleId($role_id)
//    {
//        $this->role_id = $role_id;
//    }
//}

class User {

    static public function getAll(){
        $stmt = Database::connexion()->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function delete($id){
        var_dump($id);
        $stmt = Database::connexion()->prepare('DELETE FROM `user` WHERE `user_id` = :id');
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

}

