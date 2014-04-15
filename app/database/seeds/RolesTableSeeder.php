<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $userRole = new Role;
        $userRole->name = 'comment';
        $userRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $userRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $userRole );
    }

}
