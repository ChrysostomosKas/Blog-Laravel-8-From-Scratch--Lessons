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

    /**
     *
     *
     * @return BelongsTo
     */
    public function category()
    {
        return$this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
