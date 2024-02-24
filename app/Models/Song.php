<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    public function listener()
    {
        return $this->belongsToMany(Listener::class, "listener_song");
    }
}
