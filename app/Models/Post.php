<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user()
    {

      return $this->BelongsTo(User::class)->withDefault([
        'name' => 'Misafir Delikanlı'
      ]);
    }

    // public function tags()
    // {

    //   return $this->belongsToMany(Tag::class)
    //   ->using(PostTag::class)
    //   ->withTimestamps()
    //   ->withPivot('status');
    //   #önce ilişkiye kuran tablo sonra PİVOT TABLE 
    //   #ilişkinin kurulmak istenen tablo 'post_tag'
    // }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function comment()
    {
      return $this->morphOne(Comment::class, 'commentable')->latest();
    }

    public function tags()
    {
      return $this->morphToMany(Tag::class, 'taggable');
    }
}
