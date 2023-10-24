<?php

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasUuids;

    protected $table = 'about';
    protected $primaryKey = 'id';

    protected $fillable = [
        'description', 'image1', 'image2', 'vission', 'mission', 'year', 'completed_case'
    ];
}
