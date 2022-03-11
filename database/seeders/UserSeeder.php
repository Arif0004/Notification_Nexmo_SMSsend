<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'faruk',
            // 'email' => 'default@mail.com',
            // 'password' => bcrypt('12345'),
            'vote' => 1123,
            'is_admin' => true,
            'price' => 200,
            'address' => 'Cumilla'
        ]);
    }
}
