<?php

namespace Database\Seeders;

use App\Models\User\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::create([
            'type' => 'admin',
        ]);
        UserType::create([
            'type' => 'warehouse',
        ]);
        UserType::create([
            'type' => 'delivery',
        ]);
        UserType::create([
            'type' => 'maintenance',
        ]);
        UserType::create([
            'type' => 'customer',
        ]);
    }
}
