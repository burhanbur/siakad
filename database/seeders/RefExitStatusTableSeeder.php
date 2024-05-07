<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefExitStatus;

class RefExitStatusTableSeeder extends Seeder
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
                'id' => 0,
                'name' => 'Selesai Pendidikan Non Gelar',
                'is_active' => 1,
            ],
            [
                'id' => 1,
                'name' => 'Lulus',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Mutasi',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Dikeluarkan',
                'is_active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Mengundurkan Diri',
                'is_active' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Putus Studi',
                'is_active' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Wafat',
                'is_active' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Alih Fungsi',
                'is_active' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Pensiun',
                'is_active' => 1,
            ],
        ];

        RefExitStatus::insert($data);
    }
}