<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\RecipeDirection;
use App\RecipeIngredient;

class Recipe extends Model
{
    protected $fillable=[
        'name','description','image'
    ];

    public function user(){

        return $this->belongsTo(User::Class);
    }

    public function ingredient(){

        return $this->hasMany(RecipeIngredient::Class);
    }

    public function Direction(){

        return $this->hasMany(RecipeDirection::Class);
    }

    public static function form(){
        return ['name'=>'','description'=>'','image'=>'',
        'ingredients'=>[
            RecipeIngredient::form()
        ],
         'directions'=>[
            RecipeDirection::form(),
            RecipeDirection::form()
            

         ]];


    }


}
