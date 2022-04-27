<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    // OR protected $guarded = ['id'];
    // OR  protected $fillable =['title', 'excerpt', 'body', 'id'];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) // Post:newQueru()->filter()
    {
        $query->when($filters['search'] ?? false, function ($query, $search){
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        });

    }

    /**
     *
     *
     * @return BelongsTo
     */
    public function category()
    {
        return$this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
