<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'type', //buy or sell
        'category',
        'price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->hasOne(Category::class);
    }

    public static function form()
    {
        return [
            'name' => '',
            'image' => '',
            'description' => '',
            'type' => '',
            'category' => '',
            'price' => '',
        ];
    }
}
