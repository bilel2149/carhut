<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $fillable = [
        'slider_title', 'slider_content', 'slider_image', 'slider_status',
    ];
}
