<?php

namespace Database\Seeders\RolePermission;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $permission = Permission::create([
            Permission::FaName => 'دسترسی به پنل مدیریت',
            Permission::Name => 'admin.panel.access'
        ]);



    }
}
