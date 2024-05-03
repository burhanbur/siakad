<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Role::create([
            'id' => '1',
            'name' => 'admin', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '2',
            'name' => 'academic', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '3',
            'name' => 'student', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '4',
            'name' => 'lecture', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '5',
            'name' => 'finance', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '6',
            'name' => 'rector', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '7',
            'name' => 'dean', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '8',
            'name' => 'head_study_program', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '9',
            'name' => 'admin_study_program', 
            'guard_name' => 'web'
         ]);

         Role::create([
            'id' => '10',
            'name' => 'pddikti', 
            'guard_name' => 'web'
         ]);
    }
}
