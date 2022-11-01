<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repeated = Photo::factory()->count(2);
        Album::factory()
            ->count(2)
            ->hasAttached($repeated, [])
            ->create();

        Album::factory()
            ->count(3)
            ->hasAttached(Photo::factory()->count(3), [])
            ->create();

        Album::factory()
            ->count(1)
            ->create();
    }
}
