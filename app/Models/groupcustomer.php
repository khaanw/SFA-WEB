<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupcustomer extends Model
{
    use HasFactory;
    protected $table='groupcustomer';
    protected $primaryKey='id';
    protected $guarded=[];
}
