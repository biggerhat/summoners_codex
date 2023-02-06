<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Attribute extends Model {
    use HasFactory;

    protected $guarded = [];

    protected static function booted() {
        static::saving(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }
}
