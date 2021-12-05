<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) // Post::newQuery()->filter()
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) => // the fn is just a fancy way of writing function () {}
            $query->where(fn ($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['category'] ?? false, fn ($query, $category) => // the fn is just a fancy way of writing function () {}
            $query
                ->whereHas('category', fn($query) =>
                    $query->where('slug', $category)
            )
        );

        $query->when($filters['author'] ?? false, fn ($query, $author) => // the fn is just a fancy way of writing function () {}
            $query
                ->whereHas('author', fn($query) =>
                    $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
