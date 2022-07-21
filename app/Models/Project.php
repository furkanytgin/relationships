<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function tasks()
    {
        return $this->hasManyThrough(Task::class, Team::class, 'project_id', 'user_id', 'id', 'user_id');
        #task  tablo ile proje tablosu arasında ilişki kurmak için 
        # user tablosunu kullanıyoruz task tablosunda project_id alanı yok.:)
    }

    public function task () 
    {
        return $this->hasOneThrough(Task::class, Team::class, 'project_id', 'user_id', 'id', 'user_id');
        #team ilişki verileri tutulan toblo
        #.3.parametere Team::class sütu adın 
        #.3.parametere Team::class sütu adın 
        #.4.parametere Team::class diğer ilişki  sütu adın 
    }
}
