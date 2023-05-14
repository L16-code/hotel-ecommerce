<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelbooking extends Model
{
    public $table = "hotelbooking";
    use HasFactory;
    protected $guarded=[];

    public function hotel(){
        return $this->hasMany(Hotels::class,'id','hid');
    }
}
