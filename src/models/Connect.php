<?php

class Connect
{
    public function __construct()
    {
        $mongo = new MongoDB\Client("mongodb+srv://cluster0.gbzl3.mongodb.net/myFirstDatabase", array("username" => 'root', "password" => "Vikas@1998"));
    }
}
