<?php

class SocialMedia{

    public string $name;
}

class Facebook extends SocialMedia{
    public function login(string $username,string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook{

    public function login(string $username,string $password): bool
    {
        return false;
    }
}


$f = new FakeFacebook;

echo $f->login('fajar','1233');


// FINAL CLASS