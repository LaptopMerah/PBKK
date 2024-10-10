<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class News extends Model
{
    use HasFactory;
    protected $fillable = ['title','author_id','category_id', 'slug', 'image', 'content'];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->wherehas('category', fn ($query) =>
                $query->where('slug', $category))
        ); 

        $query->when(
            $filters['authors'] ?? false,
            fn ($query, $authors) =>
            $query->wherehas('user', fn ($query) =>
                $query->where('username', $authors))
        ); 
    }
};