<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasUuids;
    protected $table = 'content';
    protected $primaryKey = 'id';
    protected $fillable = [
        'header_title',
        'header_description',
        'header_motto',
        'header_motivation_title',
        'header_motivation_subtitle',
        'area_motto',
        'area_title',
        'area_description',
        'contact_title',
        'contact_description',
        'footer_description',
    ];
}
