<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description' , 'director' , 'url' , 'thumbnail' ,'slug' ,'length'
    ];
  protected $guarded = [];


    public function getlengthAttribute($value){
        return gmdate("H:i:s",$value);
    }
}
