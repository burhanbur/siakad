<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefAdministrativeStatus;

class RefAdministrativeStatusTableSeeder extends Seeder
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
                'name' => 'Sudah Membayar',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Belum Membayar',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Menunggu Konfirmasi',
                'is_active' => 1,
            ],
        ];

        RefAdministrativeStatus::insert($data);
    }
}