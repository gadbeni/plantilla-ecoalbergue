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
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'SENTÍ LA EMOCIÓN ÚNICA DE LA AVENTURA',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Template Laravel y Voyager',
                'details' => '',
                'type' => 'text',
                'order' => 3,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings\\May2024\\IB1vZV2OG9vyULQZAJOT.png',
                'details' => '',
                'type' => 'image',
                'order' => 7,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Aguaysal',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Template Laravel y Voyager',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 11,
                'key' => 'system.enabled',
                'display_name' => 'Enabled',
                'value' => '1',
                'details' => NULL,
                'type' => 'checkbox',
                'order' => 6,
                'group' => 'System',
            ),
            9 => 
            array (
                'id' => 13,
                'key' => 'site.main_img',
                'display_name' => 'Imagen Principal',
                'value' => 'settings\\May2024\\wg7blXBZPKBu6zdsZJW0.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'Site',
            ),
            10 => 
            array (
                'id' => 15,
                'key' => 'site.subtitle',
                'display_name' => 'Sub Titulo',
                'value' => 'Bienvenidos a Aguaysal',
                'details' => NULL,
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => 16,
                'key' => 'contacto.phone',
                'display_name' => 'Numero de telefono',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 12,
                'group' => 'Contacto',
            ),
            12 => 
            array (
                'id' => 17,
                'key' => 'contacto.email',
                'display_name' => 'Correo Electronico',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Contacto',
            ),
            13 => 
            array (
                'id' => 18,
                'key' => 'system.logo-qr',
                'display_name' => 'Logo del QR',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 13,
                'group' => 'System',
            ),
        ));
        
        
    }
}