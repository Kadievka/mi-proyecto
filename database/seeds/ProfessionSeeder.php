<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('professions')->truncate();
        DB::table('professions')->insert([
        	'title'=>'Desarrollador back-end'
        ]);
        DB::table('professions')->insert([
        	'title'=>'Desarrollador front-end'
        ]);

        $professions=DB::select('SELECT id FROM professions WHERE title=?',['Desarrollador back-end']);
        //dd($professions);
    }
}
