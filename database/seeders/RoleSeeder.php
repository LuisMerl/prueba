<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1= Role::create(['name' => 'Admin']);
        $role2= Role::create(['name' => 'Aux']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);

        Permission::create(['name' => 'empleado.home.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'empleado.home.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'empleado.home.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'empleado.home.edit'])->syncRoles([$role1,$role2]);


        
    }
}
