<?php

require_once "exception/ValidationException.php";
require_once "daata/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Aldizar";
$loginRequest->passsword = "123";
try {
    valdateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
} finally {
    echo "ERROR ATAU ENGGAK, AKAN DIEKSEKUSI" .PHP_EOL;
}