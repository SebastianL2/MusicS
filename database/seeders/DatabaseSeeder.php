<?php
namespace Database\Seeders;

use App\Models\Song;
use App\Models\User;
use App\Models\Listener; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Listener::factory(16)->create();
        Song::factory(6)->create()->each(function ($song) {
            $song->listener()->sync(
                Listener::pluck('id')->random(3)
            );
        });
    }
}

