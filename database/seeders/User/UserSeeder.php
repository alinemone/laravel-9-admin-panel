<?php

namespace Database\Seeders\User;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            User::NAME => 'admin',
            User::MOBILE => '09189573245',
            User::PASSWORD => Hash::make('password'),
            User::EXPIRED_AT => Carbon::now()->addYears(10),
        ]);

        $roles = Role::pluck('id','id')->all();

        $user->syncRoles($roles);
    }
}
