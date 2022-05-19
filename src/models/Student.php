<?php

namespace App\Models;

use App\Models\ResourceModel;

class Student extends ResourceModel
{

    var $table = 'student';
    var $primaryKey = 'RollNo';
    var $connection = false;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
}
