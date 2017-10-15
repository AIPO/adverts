<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable =['user_id', 'name', 'description', 'type', 'category', 'price'];
}
