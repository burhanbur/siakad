<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterConversionScore;

class MasterConversionScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [];
        $letters = [
            [
                'letter' => 'A',
                'lower_limit' => 85.00,
                'upper_limit' => 100.00,
            ],
            [
                'letter' => 'A-',
                'lower_limit' => 80.00,
                'upper_limit' => 84.99,
            ],
            [
                'letter' => 'B+',
                'lower_limit' => 75.00,
                'upper_limit' => 79.99,
            ],
            [
                'letter' => 'B',
                'lower_limit' => 70.00,
                'upper_limit' => 74.99,
            ],
            [
                'letter' => 'B-',
                'lower_limit' => 65.00,
                'upper_limit' => 69.99,
            ],
            [
                'letter' => 'C+',
                'lower_limit' => 60.00,
                'upper_limit' => 64.99,
            ],
            [
                'letter' => 'C',
                'lower_limit' => 50.00,
                'upper_limit' => 59.99,
            ],
            [
                'letter' => 'D',
                'lower_limit' => 35.00,
                'upper_limit' => 49.99,
            ],
            [
                'letter' => 'E',
                'lower_limit' => 0.00,
                'upper_limit' => 34.99,
            ],
        ];

        // jumlah data seed mata kuliah
        for ($i = 1; $i <= 19; $i++) {

            // jumlah nilai huruf
            foreach ($letters as $key => $value) {
                $data[] = [
                    'subject_id' => $i,
                    'letter' => $value['letter'],
                    'lower_limit' => $value['lower_limit'],
                    'upper_limit' => $value['upper_limit'],
                ];
            }
        }

        MasterConversionScore::insert($data);
    }
}