<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();


        $admin = new User;
        $admin->name = "Mo Che";
        $admin->email = "admin@caexample.com";
        $admin->password = "secret123";
        $admin->save();

        $admin->roles()->attach($role_admin);
        
        $user = new User;
        $user->name = "John Jones";
        $user->email = "user@caexample.com";
        $user->password = "secret123";
        $user->save();

        $user->roles()->attach($role_user);
    }
}
