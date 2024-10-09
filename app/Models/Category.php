<?php

namespace App\Models;

use App\CategoryType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'slug', 'color'];

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    public function setTypeAttribute($type): void
    {
        $this->attributes['type'] = $type instanceof CategoryType ? $type->value : $type;
    }
    public function getTypeAttribute($value): CategoryType
    {
        return CategoryType::from($value);  // Convert the stored string back to a CategoryType enum
    }
}
