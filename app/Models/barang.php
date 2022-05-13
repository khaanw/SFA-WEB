<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\barangController;

class barang extends Model
{
    use HasFactory;
    protected $table='barang';
    protected $primaryKey='id';
    protected $guarded=[];
}
