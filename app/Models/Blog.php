<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    // nonactive auto update on created_at and updated_at
    // public $timestamps = false;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    // whitelist
    protected $fillable = ['title','description'];

    //blacklist
    // protected $guarded = ['created_at'];
}
