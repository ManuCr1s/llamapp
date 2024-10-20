<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=>'administrador',
            'email'=>'mcristobaln@outlook.com',
            'password'=>Hash::make('admin')
        ]);
        $admin->assignRole('admin');
        $productor = User::create([
            'name'=>'productor',
            'email'=>'manu_nc@outlook.com',
            'password'=>Hash::make('productor')
        ]);
        $productor->assignRole('productor');
    }
}
