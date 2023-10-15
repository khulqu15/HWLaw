<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Link extends Model
{
    use HasUuids;

    protected $table = 'links';
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_at';

    protected $fillable = ['name', 'link'];
}
