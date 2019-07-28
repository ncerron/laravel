<?php

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
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'natalia',
            'email' => 'mi_mail@gmail.com',
            'password' => bcrypt('12345678'),
            
        ]);


    }
}
