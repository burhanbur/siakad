<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefAcademicEvent;

class RefAcademicEventsTableSeeder extends Seeder
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
                'name' => 'Penerimaan Mahasiswa Baru',
                'code' => 'pmb',
            ],
            [
                'id' => 2,
                'name' => 'Pengisian Kartu Rencana Studi',
                'code' => 'krs',
            ],
            [
                'id' => 3,
                'name' => 'Persetujuan Kartu Rencana Studi',
                'code' => 'approval-krs',
            ],
            [
                'id' => 4,
                'name' => 'Pembayaran Sumbangan Pembinaan Pendidikan (SPP)',
                'code' => 'spp',
            ],
            [
                'id' => 5,
                'name' => 'Perkuliahan',
                'code' => 'kuliah',
            ],
            [
                'id' => 6,
                'name' => 'Ujian Tengah Semester',
                'code' => 'uts',
            ],
            [
                'id' => 7,
                'name' => 'Ujian Akhir Semester',
                'code' => 'uas',
            ],
            [
                'id' => 8,
                'name' => 'Pengisian Nilai Akhir',
                'code' => 'nilai',
            ],
            [
                'id' => 9,
                'name' => 'Pengumuman Nilai Akhir',
                'code' => 'pengumuman',
            ],
        ];

        RefAcademicEvent::insert($data);
    }
}