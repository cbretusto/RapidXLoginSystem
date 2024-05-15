<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SystemOneHris extends Model
{
    protected $table = 'tbl_EmployeeInfo';
    protected $connection = 'mysql_systemone_hris';
}
