<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefInstitutionType;

class RefInstitutionTypesTableSeeder extends Seeder
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
                'name' => 'Universitas',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Fakultas',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Program Studi',
                'is_active' => 1,
            ],
        ];

        RefInstitutionType::insert($data);
    }
}