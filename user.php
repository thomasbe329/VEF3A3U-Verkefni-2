<?php

class User {

    protected $email;
    protected $password;

    public function __construct($user = ["example@mail.com", "Example"]) {
        $this->email = $user[0];
        $this->password = $user[1];
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

$usr = new User(['grr@mail.com','grr123']);
$usr2 = new User();
var_dump($usr);
var_dump($usr2);