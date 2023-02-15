<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class CardPhase extends Model {
    use HasFactory;

    protected $guarded = [];

    protected static function booted() {
        static::saving(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    public function cards(): BelongsToMany {
        return $this->belongsToMany(Card::class);
    }
}
