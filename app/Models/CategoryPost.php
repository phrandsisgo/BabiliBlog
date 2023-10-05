<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    //this is the connector for many to many relationship so it doesn't need functions for the connections
    use HasFactory;
}
