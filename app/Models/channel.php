<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\channelController;

class channel extends Model
{
    use HasFactory;
    protected $table='channel';
    protected $primaryKey='id';
    protected $guarded=[];
}
