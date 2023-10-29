<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasUuids;

    protected $table = 'galleries';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'image', 'description'];
}
