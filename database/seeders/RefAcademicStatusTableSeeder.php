<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefAcademicStatus;

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
                'name' => 'Aktif',
                'code' => 'A',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Cuti',
                'code' => 'C',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Non-Aktif',
                'code' => 'N',
                'is_active' => 1,
            ],
        ];

        RefAcademicStatus::insert($data);
    }
}