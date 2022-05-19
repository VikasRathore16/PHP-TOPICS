<?php

namespace App\Models;

use App\Models\ResourceModel;

class Teacher extends ResourceModel
{

    var $table = 'teacher';
    var $primaryKey = 'Id';
    var $connection = false;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
}
