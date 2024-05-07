<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefSubjectRegistrationStatus;

class RefSubjectRegistrationStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Menunggu Persetujuan',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Disetujui',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Ditolak',
                'is_active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Mengajukan Penghapusan',
                'is_active' => 1,
            ],
        ];

        RefSubjectRegistrationStatus::insert($data);
    }
}