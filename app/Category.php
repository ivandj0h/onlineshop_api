<?php 

namespace App;

use IlluminateDatabaseEloquentModel;

class Category extends Model {
    protected $fillable = ['name'];
    public $timestamps = false;
    public static $rules = ['name' => 'required'];
} 