<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AthenaModel extends Model
{
    protected $table = 'athena_data';

    protected $pharmacy_name;
    protected $address;
    public $timestamps = true;
}
