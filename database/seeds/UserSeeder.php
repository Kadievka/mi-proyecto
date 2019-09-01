<?php

use Illuminate\Database\Seeder;
use App\User;

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

        //CONSTRUCTOR DE CONSULTAS DE SQL
        
        /*DB::table('users')->insert([
        	'name'=>'Kadievka Salcedo',
        	'email'=>'kadievka@gmail.com',
        	'password'=>bcrypt('1111'),
        	'profession_id'=>1
        ]);
        DB::insert('INSERT INTO users (name, email, password) VALUES (?,?,?)', [
        	'Otro Usuario',
        	'otrousuario@gmail.com',
        	bcrypt('1111'),
        ]);*/

        //MODEL DE ELOQUENT

        User::create ([
        	'name'=>'Kadievka Salcedo',
        	'email'=>'kadievka@gmail.com',
        	'password'=>bcrypt('1111'),
        	'profession_id'=>1
		]);

		User::create ([
        	'name'=>'Otro Usuario',
        	'email'=>'otrousuario@gmail.com',
        	'password'=>bcrypt('1111'),
		]);

    }
}
