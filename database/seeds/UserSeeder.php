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
        //DB::table('users')->truncate();
        DB::table('users')->insert([
        	'name'=>'Kadievka Salcedo',
        	'email'=>'kadievka@gmail.com',
        	'password'=>bcrypt('1111'),
        	'profession_id'=>1
        ]);
    }
}
