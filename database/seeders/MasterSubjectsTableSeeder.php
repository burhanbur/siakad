<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterSubject;

class MasterSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [
            [
                'id' => 1,
                'code' => 'SKD001',
                'name' => 'Kalkulus 1',
                'credit' => 4,
                'institution_id' => 1,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'code' => 'SKD002',
                'name' => 'Fisika Dasar 1',
                'credit' => 4,
                'institution_id' => 1,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'code' => '011101',
                'name' => 'Arsitektur dan Organisasi Komputer',
                'credit' => 3,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'code' => '011102',
                'name' => 'Pengantar Teknologi Informasi',
                'credit' => 2,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'code' => '011103',
                'name' => 'Dasar Pemrograman',
                'credit' => 1,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'code' => '011104',
                'name' => 'Basis Data',
                'credit' => 3,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'code' => '011105',
                'name' => 'Pemrograman Berorientasi Objek',
                'credit' => 4,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'code' => '011106',
                'name' => 'Manajemen Sistem Informasi',
                'credit' => 2,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'code' => '011107',
                'name' => 'Rekayasa Perangkat Lunak',
                'credit' => 2,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'code' => '011108',
                'name' => 'Pemrograman Web',
                'credit' => 3,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 11,
                'code' => '011109',
                'name' => 'Probabilitas dan Statistika',
                'credit' => 3,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 12,
                'code' => '011110',
                'name' => 'Jaringan Komputer',
                'credit' => 3,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 13,
                'code' => 'SKD003',
                'name' => 'Kalkulus 2',
                'credit' => 4,
                'institution_id' => 1,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 14,
                'code' => 'SKD004',
                'name' => 'Bahasa Inggris 1',
                'credit' => 2,
                'institution_id' => 1,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 15,
                'code' => 'SKD005',
                'name' => 'Bahasa Inggris 2',
                'credit' => 2,
                'institution_id' => 1,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 16,
                'code' => 'SKD006',
                'name' => 'Fisika Dasar 2',
                'credit' => 4,
                'institution_id' => 1,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 17,
                'code' => '011111',
                'name' => 'Algoritma dan Struktur Data',
                'credit' => 3,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 18,
                'code' => '011112',
                'name' => 'Matematika Diskrit',
                'credit' => 4,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 19,
                'code' => '011113',
                'name' => 'Sistem Operasi',
                'credit' => 3,
                'institution_id' => 3,
                'is_mandatory' => 1,
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        MasterSubject::insert($data);
    }
}