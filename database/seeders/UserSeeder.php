<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Kititat Bamrung';
        $admin->email = "n00201327@iadt.ie";
        $admin->password = "password";
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = "David Bowie";
        $user->email = "db@gmail.com";
        $user->password = "password";
        $user->save();
        $user->roles()->attach($role_user);
    }
}
