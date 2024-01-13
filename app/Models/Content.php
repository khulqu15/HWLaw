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
        'about_title',
        'about_description',
        'about_point_title',
        'about_point_description',
        'about_motto',
        'news_motto',
        'news_title',
        'video_motto',
        'video_title',
        'form_contact_motto',
        'form_contact_title',
        'form_contact_description',
        'area_motto',
        'area_title',
        'area_description',
        'contact_title',
        'contact_description',
        'footer_description',
    ];
}
