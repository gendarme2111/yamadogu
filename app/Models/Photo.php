<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //テーブル名
    protected $table = 'photos';

    //可変項目
    protected $guarded = ['id'];

    // public function getData(){

    //     return $this->path;

}
