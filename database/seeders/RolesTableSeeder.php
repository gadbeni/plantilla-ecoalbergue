<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Admin',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'administrador']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Administrador',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'editor']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Editor'),
            ])->save();
        }
        
        $role = Role::firstOrNew(['name' => 'autor']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Autor'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.user'),
            ])->save();
        }
    }
}
