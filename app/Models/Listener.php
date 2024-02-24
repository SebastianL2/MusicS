<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listener extends Model
{
    use HasFactory;

    public $table="listeners";
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
    public function songs (){
        return $this->belongsToMany(Song::class,"listener_song");
    }
}
