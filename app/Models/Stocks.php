<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="stocks";
    protected $primaryKey = 'id_stocks';
}
