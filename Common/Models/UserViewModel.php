<?php
class UserViewModel {
    private $username;
    private $email;
    private $password;
    private $role;

    public function __construct($username, $email, $password, $role = 'user') {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role; 
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    // Debugging or displaying user information
    public function displayUserInfo() {
        echo "Username: " . $this->username . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Role: " . $this->role . "<br>";
    }
}
