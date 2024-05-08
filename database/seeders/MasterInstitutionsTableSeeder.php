<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterInstitution;

class MasterInstitutionsTableSeeder extends Seeder
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
                'code' => 'universitas',
                'name' => 'Universitas Siakad',
                'short_name' => 'SIAKAD',
                'education_program_id' => null,
                'parent_id' => null,
                'institution_type_id' => 1,
                'head_id' => null,
                'accreditation' => 'Unggul',
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        MasterInstitution::insert($data);
    }
}