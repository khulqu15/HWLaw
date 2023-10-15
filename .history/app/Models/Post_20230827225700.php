<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasUuids;

    protected $table = 'tag_posts';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'integer';

    public $timestamps = true;
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_at';

    protected $fillable = ['name'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryPost::class);
    }

    public function tag(): HasMany
    {
        return $this->hasMany(TagPost::class);
    }
}
