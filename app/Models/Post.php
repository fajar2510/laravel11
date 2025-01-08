<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use phpDocumentor\Reflection\Types\Void_;

class Post extends Model {

        use HasFactory;
        protected $fillable = ['title', 'author','slug', 'body'];

        protected $with = ['author', 'category'];

        public function author(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        public function category(): BelongsTo
        {
            return $this->belongsTo(Category::class);
        }

        public function scopeFilter(Builder $query, array $filters): void {

            $query->when(
                $filters['search'] ?? false, 
                fn($query, $search) =>  // null coalescing operator, cara lain dari isset terbaru php 8.x
                $query->where('title', 'like', '%'. $search . '%')
            );  
            
            $query->when(
                $filters['category'] ?? false, 
                fn($query, $category) => 
                $query->whereHas('category',
                    fn($query) => 
                    $query->where('slug', $category)
                )
            );

            $query->when(
                $filters['author'] ?? false, 
                fn($query, $author) => 
                $query->whereHas('author',
                    fn($query) => 
                    $query->where('username', $author)
                )
            );
        }
    }

