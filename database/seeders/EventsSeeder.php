<?php

namespace Database\Seeders;

use Hup234design\FilamentCms\Models\IndexPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IndexPage::updateOrCreate(
            [
                'slug' => 'events',
            ],
            [
                'title' => 'Events',
            ]
        );
    }
}
