<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rull Rubber',
            'email' => 'rullrubber@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => str_random(60),
          ]);
    }
}