<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@local.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => bcrypt('123456'),
            'is_admin' => 1
        ]);
    }
}
