<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 🔽 3ユーザ作成する
    User::create([
      'name' => 'クラピカ',
      'email' => 'kurapika@example.com',
      'password' => Hash::make('kurapika'),
    ]);
    }
}
