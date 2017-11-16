<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //Table Name
    protected $table = 'posts';
    //PK
    public $primaryKey = 'id';
    //Title
    public $postTitle = 'title';
    //Timestamp
    public $timestamps = true;

    //This code for Model Relationship
    public function user(){
        return $this->belongsTo('App\User');
        //A post has a relationship a user and belongs to the user
    }
}
