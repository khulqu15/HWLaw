<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryPost extends Model
{
    use HasUuids;

    protected $table = 'category_posts';
    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
