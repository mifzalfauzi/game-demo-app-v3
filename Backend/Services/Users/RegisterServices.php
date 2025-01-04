<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Main/Common/Models/RegisterUserViewModel.php';

class RegisterServices
{
    public static function RegisterServices($jsonPayload)
    {
        // Decode the JSON payload
        $registerViewModelData = json_decode($jsonPayload);

        // Debugging: print the structure of the decoded object
        echo "decoded obj";
        echo '<pre>';
        print_r($registerViewModelData);
        echo '</pre>';

        if (json_last_error() === JSON_ERROR_NONE) 
        {
            // Ensure the properties exist before trying to access them
            if (isset($registerViewModelData->username) && isset($registerViewModelData->email) && isset($registerViewModelData->password)) {
                echo "registerViewModel: " . $registerViewModelData->username . "<br>";
                echo "<h1>Processing Registration in RegisterServices</h1>";
                echo "Username: " . $registerViewModelData->username . "<br>";
                echo "Email: " . $registerViewModelData->email . "<br>";
                echo "Password: " . $registerViewModelData->password . "<br>";

                return "Registration successful!";
            } else {
                echo "Missing properties in the input data. <br>";
                return "Error in registration.";
            }
        } 
        else 
        {
            echo "Error decoding JSON: " . json_last_error_msg();
            return "Error in registration.";
        }
    }
}
?>
