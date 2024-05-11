<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterStudent;
use App\Models\TranStudentInstitution;

class MasterStudentsTableSeeder extends Seeder
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
                'reg_number_national' => '123456789',
                'sid' => '123456789',
                'name' => 'Mahasiswa',
                'gender' => 'Laki-laki',
                'birth_date' => '2003-03-03',
                'phone' => '081387807580',
                'email' => 'mahasiswa@siakad.com',
                'address' => 'Jl. Teuku Nyak Arief',
                'province_id' => null,
                'city_id' => null,
                'district_id' => null,
                'postal_code' => '16451',
                'school_origin' => 'SMA Negeri 1',
                'school_type_id' => 1,
                'graduation_year' => 2024,
                'father_name' => 'Joko Widodo',
                'father_phone' => '08123456789',
                'father_sid' => '123456789',
                'mother_name' => 'Sri Mulyani',
                'mother_phone' => '08123456789',
                'mother_sid' => '987654321',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        MasterStudent::insert($master);

        $institution = [
            [
                'student_id' => 1,
                'institution_id' => 3,
                'code' => '101123001',
                'entry_year' => '2023',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        TranStudentInstitution::insert($institution);
    }
}