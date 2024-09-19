<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'created_at' => '2024-09-16 12:37:55',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2024-09-16 12:37:55',
            ),
            1 => 
            array (
                'created_at' => '2024-09-16 12:37:55',
                'id' => 2,
                'name' => 'main',
                'updated_at' => '2024-09-16 12:37:55',
            ),
            2 => 
            array (
                'created_at' => '2024-09-19 10:13:31',
                'id' => 3,
                'name' => 'mainEn',
                'updated_at' => '2024-09-19 10:13:31',
            ),
        ));
        
        
    }
}