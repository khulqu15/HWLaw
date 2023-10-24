<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasUuids;

    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'cover', 'location', 'date', 'text', 'category_post_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryPost::class);
    }

    public function tag(): HasMany
    {
        return $this->hasMany(TagPost::class);
    }
}
