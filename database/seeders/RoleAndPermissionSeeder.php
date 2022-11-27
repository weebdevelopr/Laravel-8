<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'create-tasks']);
        Permission::create(['name' => 'edit-tasks']);
        Permission::create(['name' => 'delete-tasks']);

        $adminRole = Role::create(['name' => 'Admin']);
        $NormalUserRole = Role::create(['name' => 'NormalUser']);

        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'create-tasks',
            'edit-tasks',
            'delete-tasks',
        ]);

        $NormalUserRole->givePermissionTo([
            'create-tasks',
            'edit-tasks',
            'delete-tasks',
        ]);
    }
}
