<?php
// require_once '../../Common/Models/UserViewModel.php';
// require_once '../../Backend/Services/Users/RegisterServices.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Main/Process/Users/Abstraction/IProcessRegister.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Main/Common/Models/RegisterUserViewModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Main/Backend/Services/Users/RegisterServices.php';
echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
// // declare(strict_types) = 1;

echo 'Request Method: ' . $_SERVER['REQUEST_METHOD'] . '<br>';

class ProcessRegister implements IProcessRegister
{
    public static function ProcessUserRegister($registerViewModel)
    {
        echo 'UserViewModel class exists: ' . (class_exists('UserViewModel') ? 'Yes' : 'No') . '<br>';

        echo 'Class of object passed: ' . get_class($registerViewModel) . '<br>';

        echo "<h1>From Process Register</h1>";
        echo "Username: " . $registerViewModel->getUsername() . "<br>";
        echo "Email: " . $registerViewModel->getEmail() . "<br>";
        echo "Role: " . $registerViewModel->getRole() . "<br>"; 
            
        // Wrap the ViewModel as a JSON payload
        // $jsonPayload = json_encode($registerViewModel);
        // var_dump($registerViewModel);

        $jsonPayload = json_encode([
            'username' => $registerViewModel->getUsername(),
            'email' => $registerViewModel->getEmail(),
            'password' => $registerViewModel->getPassword(),
            'role' => $registerViewModel->getRole(),
        ]);

        echo "JSON Payload: <pre>" . $jsonPayload . "</pre>";
        $registerServices = RegisterServices::RegisterServices($jsonPayload);

        return $registerServices;
    }
}

?>
