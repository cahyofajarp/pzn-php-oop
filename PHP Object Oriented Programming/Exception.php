<?php

require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest;

$loginRequest->username = "";
$loginRequest->password = "";


try {
    validateLoginRequest($loginRequest);
}catch(ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}";
}
// catch(Exception $error){
//     echo "Validation Error : {$error->getMessage()}";
// }

// validateLoginRequest($loginRequest);