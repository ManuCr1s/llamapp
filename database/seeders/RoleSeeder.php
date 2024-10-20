<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name'=>'admin']);
        $role_productor = Role::create(['name'=>'productor']);

        $permission_create_role = Permission::create(['name'=>'create roles']);
        $permission_read_role = Permission::create(['name'=>'read roles']);
        $permission_update_role = Permission::create(['name'=>'update roles']);
        $permission_delete_role = Permission::create(['name'=>'delete roles']);

        $permission_create_llama = Permission::create(['name'=>'create llamas']);
        $permission_read_llama = Permission::create(['name'=>'read llamas']);
        $permission_update_llama = Permission::create(['name'=>'update llamas']);
        $permission_delete_llama = Permission::create(['name'=>'delete llamas']);

        $permission_admin = [
            $permission_create_role,
            $permission_read_role,
            $permission_update_role,
            $permission_delete_role,
            $permission_create_llama,
            $permission_read_llama,
            $permission_update_llama,
            $permission_delete_llama
        ];
        $permission_productor =[
            $permission_create_llama,
            $permission_read_llama,
            $permission_update_llama,
            $permission_delete_llama
        ];

        $role_admin->syncPermissions($permission_admin);
        $role_productor->syncPermissions($permission_productor);
    }
}
