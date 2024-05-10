<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterAcademicEvent;

class MasterAcademicEventsTableSeeder extends Seeder
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
                'event_id' => 2, // isi krs
                'academic_period_id' => 2,
                'start_date' => '2024-02-12 00:00:00',
                'end_date' => '2024-02-19 23:59:59',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'event_id' => 3, // approval krs
                'academic_period_id' => 2,
                'start_date' => '2024-02-12 00:00:00',
                'end_date' => '2024-02-23 23:59:59',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'event_id' => 4, // bayar spp
                'academic_period_id' => 2,
                'start_date' => '2024-02-24 00:00:00',
                'end_date' => '2024-03-01 23:59:59',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'event_id' => 5, // perkuliahan
                'academic_period_id' => 2,
                'start_date' => '2024-03-04 00:00:00',
                'end_date' => '2024-07-26 23:59:59',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'event_id' => 6, // uts
                'academic_period_id' => 2,
                'start_date' => '2024-05-06 00:00:00',
                'end_date' => '2024-05-13 23:59:59',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'event_id' => 7, // uas
                'academic_period_id' => 2,
                'start_date' => '2024-07-22 00:00:00',
                'end_date' => '2024-07-26 23:59:59',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'event_id' => 8, // isi nilai
                'academic_period_id' => 2,
                'start_date' => '2024-07-22 00:00:00',
                'end_date' => '2024-08-02 23:59:59',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'event_id' => 9, // pengumuman nilai akhir
                'academic_period_id' => 2,
                'start_date' => '2024-08-03 00:00:00',
                'end_date' => '2024-08-03 00:00:00',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        MasterAcademicEvent::insert($data);
    }
}