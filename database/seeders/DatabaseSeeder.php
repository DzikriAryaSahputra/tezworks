<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::firstOrCreate(
            ['email' => 'admin@tezworks.id'],
            [
                'name' => 'Admin TezWorks',
                'password' => Hash::make('password'),
            ]
        );

        $this->call([
            ServiceSeeder::class,
            PortfolioSeeder::class,
        ]);
    }
}
