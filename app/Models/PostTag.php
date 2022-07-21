<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot
{
    use HasFactory;

    protected $table = 'post_tag';

    public static function boot() 
    {
        parent::boot();

        static::created(function ($item) {
            dd('oluşturma işlemi', $item);
        });

        static::deleted(function ($item) {
            dd('delete event', $item);
        });
    }
}
