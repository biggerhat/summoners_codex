<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Card extends Model {
    use HasFactory;

    protected $guarded = [];

    protected static function booted() {
        static::saving(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    public function character(): BelongsTo {
        return $this->belongsTo(Character::class);
    }

    public function cardPhases(): BelongsToMany {
        return $this->belongsToMany(CardPhase::class);
    }

    public function cardTypes(): BelongsToMany {
        return $this->belongsToMany(CardType::class);
    }
}
