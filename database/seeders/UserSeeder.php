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
        $users= [
            ['name'=>'fatemeh motamed', 'email'=>'m@gmail.com', 'password'=>'123'],
            ['name'=>'sanaz ashrafi', 'email'=>'s@gmail.com', 'password'=>'123'],
            ['name'=>'afsaneh motamed', 'email'=>'a@gmail.com', 'password'=>'123']

        ];
        User::insert($users);
    }
}
