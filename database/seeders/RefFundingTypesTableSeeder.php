<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefFundingType;

class RefFundingTypesTableSeeder extends Seeder
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
                'name' => 'Mandiri',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Beasiswa Tidak Penuh',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Beasiswa Penuh',
                'is_active' => 1,
            ],
        ];

        RefFundingType::insert($data);
    }
}