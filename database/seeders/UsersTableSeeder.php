<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;

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

        $admin->assignRole('admin');

        $academic = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Admin Akademik',
            'username' => 'akademik',
            'email' => 'akademik@siakad.com',
            'password' => Hash::make('akademik'),
            'email_verified_at' => $now,
        ]);

        $academic->assignRole('academic');

        $finance = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Keuangan',
            'username' => 'keuangan',
            'email' => 'keuangan@siakad.com',
            'password' => Hash::make('keuangan'),
            'email_verified_at' => $now,
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

        $lecture->assignRole('lecture');

        $pddikti = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Operator PDDikti',
            'username' => 'pddikti',
            'email' => 'pddikti@siakad.com',
            'password' => Hash::make('pddikti'),
            'email_verified_at' => $now,
        ]);

        $pddikti->assignRole('pddikti');

        $student = User::create([
            'uuid' => (string) Str::orderedUuid(),
            'name' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@siakad.com',
            'password' => Hash::make('mahasiswa'),
            'email_verified_at' => $now,
        ]);

        $student->assignRole('student');
    }
}