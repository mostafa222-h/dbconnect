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


    public function getlengthInHumanAttribute(){
        return gmdate("H:i:s",$this->value);
    }
    public function relatedVideos(int $count=6){

        return Video::all()->random($count);

}
    public function getRouteKeyName()
    {
        return 'slug' ;
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
