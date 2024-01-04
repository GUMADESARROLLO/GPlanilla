<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Http\Request;

class Department extends Model {
    protected $table = "tbl_department";
    protected $connection = 'mysql';
    public $timestamps = false;
    public function Company()
    {
        return $this->belongsTo(Company::class, 'company_id','id_compy');
    }
}
