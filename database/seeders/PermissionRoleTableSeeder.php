<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->firstOrFail();
        $permissions = Permission::all();
        $role->permissions()->sync(
            $permissions->pluck('id')->all()
        );

        $role = Role::where('name', 'administrador')->firstOrFail();
        $permissions = Permission::whereRaw("   `key` = 'browse_admin' or
                                                table_name = 'settings' or
                                                table_name = 'users'")->get();
        $role->permissions()->sync($permissions->pluck('id')->all());
        
        $role = Role::where('name', 'editor')->firstOrFail();
        $permissions = Permission::whereRaw("   `key` = 'browse_admin' or
                                                `key` = 'browse_pages' or
                                                `key` = 'read_pages' or
                                                `key` = 'edit_pages' or
                                                table_name = 'posts' or
                                                table_name = 'categories' ")->get();
        $role->permissions()->sync($permissions->pluck('id')->all());

        $role = Role::where('name', 'autor')->firstOrFail();
        $permissions = Permission::whereRaw("   `key` = 'browse_admin' or
                                                table_name = 'posts' ")->get();
        $role->permissions()->sync($permissions->pluck('id')->all());
    }
}
