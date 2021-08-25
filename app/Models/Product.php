<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";
    public $timestamps= false;
    protected $fillable=['name','price','category','description','gallery','user_id','quantity','MFD','EXP'];
    
}
