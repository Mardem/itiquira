<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'marden@gmail.com',
            'profile' => array_search('ADMIN', User::PROFILES)
        ]);
        factory(User::class, 9)->create();
    }
}
