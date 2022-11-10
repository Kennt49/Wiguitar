<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table="addresses";
    protected $primaryKey = 'id_addresses';
}
    