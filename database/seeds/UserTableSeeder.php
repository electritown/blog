<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin@admin.a',
            'email'=> 'admin@admin.a',
            'password'=>bcrypt('secret')
        ]);
        DB::table('permissions')->insert([
            'name'=>'write post',
            'guard_name'=>'Web'
        ]); 
        DB::table('permissions')->insert([
            'name'=>'edit post',
            'guard_name'=>'Web'
        ]);
        DB::table('permissions')->insert([
            'name'=>'publish post',
            'guard_name'=>'Web'
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete post',
            'guard_name'=>'Web'
        ]);
        DB::table('permissions')->insert([
            'name'=>'add comment',
            'guard_name'=>'Web'
        ]);
        DB::table('roles')->insert([
            'name'=>'reviewer',
            'guard_name'=>'Web'
        ]);
        DB::table('roles')->insert([
            'name'=>'admin',    
            'guard_name'=>'Web'
        ]);
        DB::table('roles')->insert([
            'name'=>'author',
            'guard_name'=>'Web'
        ]);

        DB::table('model_has_roles')->insert([
                'role_id'=>2,
                'model_type'=>'App\User',
                'model_id'=>1
        ]);
    }
}
