<?php

class ValidationUtil
{
    static function validate(LoginRequest $Request)
    {
        if (!isset($Request->username)){
            throw new ValidationException("username is null");
        }else if (!isset($Request->password)){
            throw new ValidationException("password is null");
        }
    }
    static function validateReflection($Request)
    {
        $reflection = new ReflectionClass($Request);
        $peroperties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($peroperties as $property) {
            if (!$property->isInitaialized($Request)){
                throw new ValidationException("$property->name is not sett");
            } else  if (is_null($property->getValue($Request))){
                throw new ValidationException("$property->name is not sett");
        }
    }
    }
}