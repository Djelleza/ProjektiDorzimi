<?php

class User{
    private $id;
    private $username;
    private $email;
    private $password;
    private $role;
    private $editedBy;


    function __construct($id,$username,$email,$password,$role, $editedBy = null){
            $this->id = $id;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
            $this->editedBy = $editedBy;
    }


    function getId(){
        return $this->id;
    }
    function getUsername(){
        return $this->username;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getRole(){
        return $this->role;
    }
    function getEditedBy() {
        return $this->editedBy;
    }
}

?>