<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->createMany([
            ['name' => 'Admin', 'email' => 'admin@example.com'],
            ['name' => 'Editeur', 'email' => 'editeur@example.com'],
            ['name' => 'Auteur', 'email' => 'auteur@example.com'],
        ]);
    }
}
