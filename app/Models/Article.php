<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";   // to ensure this Model is connected with articles migration , if you want to connect with another migration change table name here
    protected $primaryKey = "id";

    // Customize timestamp 
    const CREATED_AT = 'created_date';

    const UPDATED_AT = 'updated_date';

    // Mass Assignment 
    // Method 1
    // protected $fillable = [
    //     "title",
    //     "description",
    //     "rating",
    //     "uer_id"
    // ];

    // Method 2
    protected $guarded = [];


}
