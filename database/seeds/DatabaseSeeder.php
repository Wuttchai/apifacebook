<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'User_ID' => '111111',
                'User_Name' => 'champ',
                'User_Sex' => 'xxx',
                'User_Age' => 'xxx',
            ]);
        }
}
