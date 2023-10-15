<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Post extends Model
{
    use HasUuids;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'integer';

}
