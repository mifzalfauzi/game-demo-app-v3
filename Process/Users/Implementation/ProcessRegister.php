<?php
// require_once '../../Common/Models/UserViewModel.php';
// require_once '../../Backend/Services/Users/RegisterServices.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Main/Process/Users/Abstraction/IProcessRegister.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Main/Common/Models/RegisterUserViewModel.php';
echo $_SERVER['DOCUMENT_ROOT'] . '<br>';

// // declare(strict_types) = 1;

echo 'Request Method: ' . $_SERVER['REQUEST_METHOD'] . '<br>';

class ProcessRegister implements IProcessRegister
{
    public static function ProcessUserRegister($registerViewModel)
    {
        echo 'UserViewModel class exists: ' . (class_exists('UserViewModel') ? 'Yes' : 'No') . '<br>';

        echo 'Class of object passed: ' . get_class($registerViewModel) . '<br>';

            echo "<h1>From Register Service</h1>";
            echo "Username: " . $registerViewModel->getUsername() . "<br>";
            echo "Email: " . $registerViewModel->getEmail() . "<br>";
            echo "Role: " . $registerViewModel->getRole() . "<br>";    

        return $registerViewModel;
    }
}

// ProcessRegister::UserRegister();

?>
