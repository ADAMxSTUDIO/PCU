<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'label' => 'admin', 
            'label' => 'agent', 
            'label' => 'patient'
        ];

        // foreach($roles as $role => $value){
        //     DB::table('roles')->insert([$role => $value]);
        // }
        // DB::table('roles')->insert($roles);
        DB::table('roles')->insert(['label' => 'admin']);
        DB::table('roles')->insert(['label' => 'agent']);
        DB::table('roles')->insert(['label' => 'patient']);
    }
}