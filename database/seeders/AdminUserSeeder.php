<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{

    public function run(): void
    {
        AdminUser::factory(1)->create([
            'name' => 'Samir',
            'email' => 'sme@gmail.com',
            'password' => bcrypt(12345),
        ]);
    }
}
