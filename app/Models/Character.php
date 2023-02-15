<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Character extends Model {
    use HasFactory;

    protected $guarded = [];

    protected static function booted() {
        static::saving(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    public function cards(): HasMany {
        return $this->hasMany(Card::class);
    }

    public function set(): BelongsTo {
        return $this->belongsTo(Set::class);
    }

    public function attributes(): BelongsToMany {
        return $this->belongsToMany(Attribute::class);
    }
}
