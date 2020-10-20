<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //テーブル名
    protected $table = 'products';

    //不変項目
    protected $guarded = ['id'];

    // public function path(){
    //     return $this->hasMany('App\Models\Photo');

    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }
}
