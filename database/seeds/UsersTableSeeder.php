<?php

use App\Models\User;
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
        $user = factory(User::class)->create([
            'name' => 'jerry',
            'email' => 'jerry@gmail.com',
            'password' => app('hash')->make('123456')
        ]);
    }
}
