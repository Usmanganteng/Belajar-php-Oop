<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): void
    {

    }
}

// error
// class FakeFacebook extends Facebook
// {
//     public function login(string $username, string $password): void
//     {

//     }
// }