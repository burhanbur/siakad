<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterLecture;
use App\Models\TranLectureEducation;
use App\Models\TranLectureInstitution;

class MasterLecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $master = [
            [
                'id' => 1,
                'name' => 'Dosen',
                'email' => 'dosen@siakad.com',
                'gender' => 'Laki-laki',
                'birth_date' => '1992-02-26',
                'phone' => '081387807580',
                'address' => 'Jl. H. Soleh 1',
                'province_id' => null,
                'city_id' => null,
                'district_id' => null,
                'postal_code' => '16451',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        MasterLecture::insert($master);

        $education = [
            [
                'id' => 1,
                'lecture_id' => 1,
                'education_program_id' => 5,
                'institution_name' => 'Universitas Gunadarma',
                'enrollment_year' => 2013,
                'diploma_number' => 123456789,
                'graduation_document' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        TranLectureEducation::insert($education);

        $institution = [
            [
                'lecture_id' => 1,
                'institution_id' => 3,
                'code' => '51413824',
                'code_national' => '123456789',
                'functional_role_id' => 2,
                'start_date' => '2024-02-25',
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        TranLectureInstitution::insert($institution);
    }
}