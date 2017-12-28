<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['service_title', 'service_slug', 'service_content', 'service_thumbnail'];
}
