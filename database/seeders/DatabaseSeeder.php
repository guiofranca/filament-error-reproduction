<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Child;
use App\Models\GrandChild;
use App\Models\Mother;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123123123'),
        ]);

        Mother::factory(10)
            ->has(Child::factory()->count(3)
                ->has(GrandChild::factory()->count(3), 'grand_children'), 'children')
            ->create();
    }
}
