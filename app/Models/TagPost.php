<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TagPost extends Model
{
    use HasUuids;

    protected $table = 'tag_posts';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';

    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_at';

    protected $fillable = ['name'];

    public function Post(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
