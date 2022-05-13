<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salesman extends Model
{
    use HasFactory;
    protected $table='salesman';
    protected $primaryKey='id';
    protected $guarded=[];
}
