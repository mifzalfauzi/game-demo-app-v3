<?php
class RegisterUserViewModel {
    private $username;
    private $email;
    private $password;
    private $role;

    public function __construct($username, $email, $password, $role = 'user') {
        $this->username = $this->specialCharacters($username);
        $this->email = $this->sanitizeEmail($email);
        $this->password = $this->hashPassword($password);
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

    private function sanitizeEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email;
    }   

    private function specialCharacters($username)
    {
        $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); 
        return $username;
    }

    private function hashPassword($password) 
    {
        return password_hash($password, PASSWORD_BCRYPT);  
    }

    // Debugging or displaying user information
    public function displayUserInfo() {
        echo "Username: " . $this->username . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Role: " . $this->role . "<br>";
    }
}
