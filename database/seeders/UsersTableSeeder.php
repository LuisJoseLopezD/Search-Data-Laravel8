<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\User::class, 600)->create(); LARAVEL 5
        \App\Models\User::factory()->count(600)->create(); // LARAVEL 8
        //estamos creando 600 registros
    }
}
