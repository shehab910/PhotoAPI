<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::factory()
            ->count(3)
            ->hasAttached(Album::factory()->count(2), [])
            ->create();
        Photo::factory()
            ->count(1)
            ->create();
    }
}
