<?php

namespace App\Models;

// use App\Models\ResourceModel;

class Student extends \App\Models\ResourceModel
{

    var $table = 'student';
    var $primaryKey = 'RollNo';
    var $connection = false;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
}
