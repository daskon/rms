<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'edit candidate']);
        Permission::create(['name' => 'edit employer']);

        Permission::create(['name' => 'delete candidate']);
        Permission::create(['name' => 'delete employer']);

        Permission::create(['name' => 'create candidate']);
        Permission::create(['name' => 'create employer']);

        Permission::create(['name' => 'create interview']);
        Permission::create(['name' => 'edit interview']);
        Permission::create(['name' => 'delete interview']);
        Permission::create(['name' => 'update interview']);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'employer']);
        $role->givePermissionTo('create interview');
        $role->givePermissionTo('edit interview');
        $role->givePermissionTo('delete interview');
        $role->givePermissionTo('update interview');

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('edit candidate');
        $role->givePermissionTo('delete candidate');
        $role->givePermissionTo('create candidate');

        $role->givePermissionTo('edit employer');
        $role->givePermissionTo('delete employer');
        $role->givePermissionTo('create employer');
    }
}
