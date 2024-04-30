<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-home',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.profile',
                'target' => '_self',
                'title' => 'Inicio',
                'updated_at' => '2021-06-02 14:51:15',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Media',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            2 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => 'null',
                'parent_id' => 11,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Usuarios',
                'updated_at' => '2024-04-30 15:01:47',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 11,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2024-04-30 15:01:47',
                'url' => '',
            ),
            4 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 7,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Herramientas',
                'updated_at' => '2024-04-30 15:01:51',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Menu Builder',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Database',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compass',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2021-06-02 14:07:23',
                'url' => '',
            ),
            9 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Configuraciones',
                'updated_at' => '2024-04-30 15:01:51',
                'url' => '',
            ),
            10 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 14:07:53',
                'icon_class' => 'voyager-lock',
                'id' => 11,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Seguridad',
                'updated_at' => '2024-04-30 15:01:51',
                'url' => '',
            ),
            11 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-25 18:03:59',
                'icon_class' => 'voyager-refresh',
                'id' => 12,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'clear.cache',
                'target' => '_self',
                'title' => 'Limpiar cache',
                'updated_at' => '2022-05-24 15:06:32',
                'url' => '',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2022-05-24 15:21:21',
                'icon_class' => 'voyager-list',
                'id' => 13,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 11,
                'route' => 'voyager.permissions.index',
                'target' => '_self',
                'title' => 'Permisos',
                'updated_at' => '2024-04-30 15:01:47',
                'url' => '',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2024-04-30 14:55:33',
                'icon_class' => 'voyager-categories',
                'id' => 14,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.categories.index',
                'target' => '_self',
                'title' => 'Categorías',
                'updated_at' => '2024-04-30 15:01:51',
                'url' => '',
            ),
            14 => 
            array (
                'color' => NULL,
                'created_at' => '2024-04-30 14:55:33',
                'icon_class' => 'voyager-news',
                'id' => 15,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.posts.index',
                'target' => '_self',
                'title' => 'Posts',
                'updated_at' => '2024-04-30 15:01:41',
                'url' => '',
            ),
            15 => 
            array (
                'color' => NULL,
                'created_at' => '2024-04-30 14:55:33',
                'icon_class' => 'voyager-file-text',
                'id' => 16,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.pages.index',
                'target' => '_self',
                'title' => 'Páginas',
                'updated_at' => '2024-04-30 15:01:47',
                'url' => '',
            ),
        ));
        
        
    }
}