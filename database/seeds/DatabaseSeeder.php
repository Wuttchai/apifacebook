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
'User_ID' => '1111111111111',
'User_Name' => 'champ',
'User_Sex' => 'man',
'User_Age' => '15'

]);
    }
}
