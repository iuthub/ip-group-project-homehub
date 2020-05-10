<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  
    protected $table = 'posts';
    public $primaryKey  = 'id';
    public $timestamps  = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes(){
    	return $this->hasMany('App\Like');
    }

    public function category() {
    	return $this->belongsTo('App\Category');
    }
    
}
