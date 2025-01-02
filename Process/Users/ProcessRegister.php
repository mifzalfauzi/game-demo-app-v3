<?php
require_once '../../Common/Models/UserViewModel.php';
require_once '../../Backend/Services/Users/RegisterServices.php';

// declare(strict_types) = 1;

echo 'Request Method: ' . $_SERVER['REQUEST_METHOD'] . '<br>';

class ProcessRegister
{
    public static function UserRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            echo "<h1>Processing User Registration after post</h1>";
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $user = new UserViewModel($username, $email, $password);
            
            $result = RegisterServices::RegisterServices($user);

            echo "<h1>From Register Service</h1>";
            echo "Username: " . $result->getUsername() . "<br>";
            echo "Email: " . $result->getEmail() . "<br>";
            echo "Role: " . $result->getRole() . "<br>";



            echo "<h1>Processing User Registration</h1>";
            $user->displayUserInfo();
        
            // Example: Redirect or further processing
            // header("Location: success.php");
            // exit();
        }
    }
}

ProcessRegister::UserRegister();

?>
