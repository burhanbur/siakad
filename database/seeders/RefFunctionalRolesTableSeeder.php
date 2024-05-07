<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefFunctionalRole;

class RefFunctionalRolesTableSeeder extends Seeder
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
                'name' => 'Staf',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Asisten Ahli',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Lektor',
                'is_active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Lektor Kepala',
                'is_active' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Profesor',
                'is_active' => 1,
            ],
        ];

        RefFunctionalRole::insert($data);
    }
}