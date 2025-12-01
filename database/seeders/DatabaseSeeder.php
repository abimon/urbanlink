<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
       User::create([
            "name"=>'Edimon Ombati',
            "email"=>'eabimon@gmail.com',
            "password"=>Hash::make('Qaza@2025'),
            "contact"=>'0701583807',
            "role"=>'Admin',
            "is_approved"=>true
       ]);
    }
}
