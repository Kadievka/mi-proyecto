<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tables=[
            'professions',
            'users'
        ];

        
        foreach ($tables as $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);

    }
}
