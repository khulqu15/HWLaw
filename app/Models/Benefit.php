<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasUuids;

    protected $table = 'benefit';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
        'description',
    ];
}
