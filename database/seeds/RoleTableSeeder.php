<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //     $roles = ['Admin','Customer'];
//        foreach ($roles as $role) {
//            \App\Role::create(['name'=>$role]);
        $roles = Config::get('constants.db.roles');
        foreach ($roles as $key => $role) {
            \App\Role::create(['name' => $role]);
        }
    }
}


