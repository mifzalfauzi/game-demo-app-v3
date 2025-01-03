<?php
declare(strict_types=1);
session_start();
echo session_id() . "<br>";


require_once '../../Common/Models/RegisterUserViewModel.php';
require_once '../../Process/Users/Implementation/ProcessRegister.php';

class Register
{
    public static function UserRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            echo "<h1>Processing User Registration after POST</h1>";

            $username = htmlspecialchars($_POST['username']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];

            $registerViewModel = new RegisterUserViewModel($username, $email, $password);

            echo "Register View Model populated: " . var_export($registerViewModel, true) . "<br>";
            
            //called the process register here, no need to invoke again
            $result = ProcessRegister::ProcessUserRegister($registerViewModel);

          
            
        }
    }
}

// Invoke the registration method - like a standalone script
Register::UserRegister();
?>
