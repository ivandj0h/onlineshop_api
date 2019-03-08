<?php 

namespace App;

use IlluminateDatabaseEloquentModel; 

class Product extends Model {     
    protected $fillable = ['name','category_id','slug','price','weight','description'];     
    protected $dates = [];     
    public static $rules = [
        'name' => 'required',         
        'category_id' => 'required',         
        'slug' => 'required',         
        'price' => 'required',         
        'weight' => 'required',         
        'description' => 'required',     
    ]; 
} 