<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'details' => '',
                'display_name' => 'Site Title',
                'group' => 'Site',
                'id' => 1,
                'key' => 'site.title',
                'order' => 1,
                'type' => 'text',
                'value' => 'Template',
            ),
            1 => 
            array (
                'details' => '',
                'display_name' => 'Site Description',
                'group' => 'Site',
                'id' => 2,
                'key' => 'site.description',
                'order' => 3,
                'type' => 'text',
                'value' => 'Template Laravel y Voyager',
            ),
            2 => 
            array (
                'details' => '',
                'display_name' => 'Site Logo',
                'group' => 'Site',
                'id' => 3,
                'key' => 'site.logo',
                'order' => 7,
                'type' => 'image',
                'value' => 'settings\\May2024\\IB1vZV2OG9vyULQZAJOT.png',
            ),
            3 => 
            array (
                'details' => '',
                'display_name' => 'Admin Background Image',
                'group' => 'Admin',
                'id' => 5,
                'key' => 'admin.bg_image',
                'order' => 4,
                'type' => 'image',
                'value' => '',
            ),
            4 => 
            array (
                'details' => '',
                'display_name' => 'Admin Title',
                'group' => 'Admin',
                'id' => 6,
                'key' => 'admin.title',
                'order' => 1,
                'type' => 'text',
                'value' => 'Template',
            ),
            5 => 
            array (
                'details' => '',
                'display_name' => 'Admin Description',
                'group' => 'Admin',
                'id' => 7,
                'key' => 'admin.description',
                'order' => 1,
                'type' => 'text',
                'value' => 'Template Laravel y Voyager',
            ),
            6 => 
            array (
                'details' => '',
                'display_name' => 'Admin Loader',
                'group' => 'Admin',
                'id' => 8,
                'key' => 'admin.loader',
                'order' => 2,
                'type' => 'image',
                'value' => '',
            ),
            7 => 
            array (
                'details' => '',
                'display_name' => 'Admin Icon Image',
                'group' => 'Admin',
                'id' => 9,
                'key' => 'admin.icon_image',
                'order' => 3,
                'type' => 'image',
                'value' => '',
            ),
            8 => 
            array (
                'details' => NULL,
                'display_name' => 'Enabled',
                'group' => 'System',
                'id' => 11,
                'key' => 'system.enabled',
                'order' => 6,
                'type' => 'checkbox',
                'value' => '1',
            ),
            9 => 
            array (
                'details' => NULL,
                'display_name' => 'Imagen Principal',
                'group' => 'Site',
                'id' => 13,
                'key' => 'site.main_img',
                'order' => 8,
                'type' => 'image',
                'value' => 'settings\\May2024\\wg7blXBZPKBu6zdsZJW0.jpg',
            ),
            10 => 
            array (
                'details' => NULL,
                'display_name' => 'Sub Titulo',
                'group' => 'Site',
                'id' => 15,
                'key' => 'site.subtitle',
                'order' => 2,
                'type' => 'text',
                'value' => '',
            ),
            11 => 
            array (
                'details' => NULL,
                'display_name' => 'Numero de telefono',
                'group' => 'Contacto',
                'id' => 16,
                'key' => 'contacto.phone',
                'order' => 12,
                'type' => 'text',
                'value' => '',
            ),
            12 => 
            array (
                'details' => NULL,
                'display_name' => 'Correo Electronico',
                'group' => 'Contacto',
                'id' => 17,
                'key' => 'contacto.email',
                'order' => 11,
                'type' => 'text',
                'value' => '',
            ),
        ));
        
        
    }
}