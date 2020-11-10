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
        \App\Models\User::factory()->create([
            'email' => 'customer@admin.me',
        ]);
        \App\Models\Customer::factory(20)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\Employee::factory(20)->create();

    }
}
