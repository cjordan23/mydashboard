<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
