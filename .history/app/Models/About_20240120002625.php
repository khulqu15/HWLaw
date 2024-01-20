<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasUuids;

    protected $table = 'about';
    protected $primaryKey = 'id';

    protected $fillable = [
        'cover_image',
        'about_title',
        'about_description',
        'content_motto',
        'content_title',
        'description',
        'image1',
        'image2',
        'vission',
        'mission',
        'benefit1',
        'benefit1_text',
        'benefit2',
        'benefit2_text',
        'year',
        'completed_case',
        'logo_image',
        'area_image',
        'about_image',
        'contact_image',
    ];
    // $table->string('logo_image')->nullable();
    // $table->string('about_image')->nullable();
    // $table->string('area_image')->nullable();
    // $table->string('contact_image')->nullable();
}
