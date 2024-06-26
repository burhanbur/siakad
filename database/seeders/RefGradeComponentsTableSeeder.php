<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefGradeComponent;

class RefGradeComponentsTableSeeder extends Seeder
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
                'name' => 'Ujian Tengah Semester',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Ujian Akhir Semester',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Tugas',
                'is_active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Praktikum',
                'is_active' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Kuis',
                'is_active' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Kehadiran',
                'is_active' => 1,
            ],
        ];

        RefGradeComponent::insert($data);
    }
}