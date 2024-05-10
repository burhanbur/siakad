<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\RoleMember;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $admin = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@siakad.com',
            'password' => Hash::make('admin'),
            'email_verified_at' => $now,
        ]);

        $adminRole = RoleMember::create([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'institution_id' => 1,
            'model_id' => $admin->id,
        ]);

        $academic = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Admin Akademik',
            'username' => 'akademik',
            'email' => 'akademik@siakad.com',
            'password' => Hash::make('akademik'),
            'email_verified_at' => $now,
        ]);

        $academicRole = RoleMember::create([
            'role_id' => 2,
            'model_type' => 'App\Models\User',
            'institution_id' => 1,
            'model_id' => $academic->id,
        ]);

        $finance = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Keuangan',
            'username' => 'keuangan',
            'email' => 'keuangan@siakad.com',
            'password' => Hash::make('keuangan'),
            'email_verified_at' => $now,
        ]);

        $financeRole = RoleMember::create([
            'role_id' => 5,
            'model_type' => 'App\Models\User',
            'institution_id' => 1,
            'model_id' => $finance->id,
        ]);

        $finance->assignRole('finance');

        $lecture = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Dosen',
            'username' => 'dosen',
            'email' => 'dosen@siakad.com',
            'password' => Hash::make('dosen'),
            'email_verified_at' => $now,
        ]);

        $lectureRole = RoleMember::create([
            'role_id' => 4,
            'model_type' => 'App\Models\User',
            'institution_id' => 1,
            'model_id' => $lecture->id,
        ]);

        $pddikti = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Operator PDDikti',
            'username' => 'pddikti',
            'email' => 'pddikti@siakad.com',
            'password' => Hash::make('pddikti'),
            'email_verified_at' => $now,
        ]);

        $pddiktiRole = RoleMember::create([
            'role_id' => 10,
            'model_type' => 'App\Models\User',
            'institution_id' => 1,
            'model_id' => $pddikti->id,
        ]);

        $student = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@siakad.com',
            'password' => Hash::make('mahasiswa'),
            'email_verified_at' => $now,
        ]);

        $studentRole = RoleMember::create([
            'role_id' => 3,
            'model_type' => 'App\Models\User',
            'institution_id' => 3,
            'model_id' => $student->id,
        ]);
    }
}