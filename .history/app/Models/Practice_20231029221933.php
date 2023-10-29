<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasUuids;

    protected $table = 'practices';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'cover', 'text'];
}
