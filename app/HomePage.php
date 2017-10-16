<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $fillable = ['main_text', 'sub_text', 'main_title', 'sub_title'];
}
