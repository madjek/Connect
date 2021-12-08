<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Relation::factory(100)->create();
        \App\Models\Game::factory(24)->create();
        \App\Models\Party::factory(50)->create();
        \App\Models\Message::factory(1000)->create();
    }
}
