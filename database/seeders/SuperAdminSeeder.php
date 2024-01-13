<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Volodymyr',
            'email' => 'volodymyr@gmail.com',
            'password' => Hash::make('password123')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Volodymyr2',
            'email' => 'volodymyr2@gmail.com',
            'password' => Hash::make('password456')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Volodymyr3',
            'email' => 'volodymyr3@gmail.com',
            'password' => Hash::make('password789')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
