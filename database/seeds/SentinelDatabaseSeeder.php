<?php

use Illuminate\Database\Seeder;

class SentinelDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Users
        DB::table('users')->truncate();

        $admin = Sentinel::getUserRepository()->create(array(
            'email'    => 'admin@admin.com',
            'password' => 'password',
            'nomor_induk' => 'admin'
        ));


        // Create Activations
        DB::table('activations')->truncate();
        $code = Activation::create($admin)->code;
        Activation::complete($admin, $code);
        // Create Roles
        $administratorRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Administrator',
            'slug' => 'administrator',
            'permissions' => array(
                'admin' => true,
                'users.create' => true,
                'users.update' => true,
                'users.view' => true,
                'users.destroy' => true,
                'roles.create' => true,
                'roles.update' => true,
                'roles.view' => true,
                'roles.delete' => true
            )
        ));
        
        // Assign Roles to Users
        $administratorRole->users()->attach($admin);
    }
}
