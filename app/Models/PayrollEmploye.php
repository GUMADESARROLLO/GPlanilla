<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Http\Request;

class PayrollEmploye extends Model {
    protected $table = "tbl_employe_payroll";
    protected $connection = 'mysql';
    public $timestamps = false;
}
