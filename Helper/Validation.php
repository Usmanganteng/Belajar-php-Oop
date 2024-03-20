<?php

function validateLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequset->username)){
        throw new ValidationException("Username is null");
    } else if (!isset($loginRequset->password)) {
        throw new ValidationException("Username is null");
    } else if (trim($request->username) == ""){
        throw new ValidationException("Username is Empty");
    } else if (trim($request->password) == ""){
        throw new ValidationException("Password is Empty");
    }
}