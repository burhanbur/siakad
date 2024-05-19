<?php 

namespace App\Services;

class Dropdown
{
    public static function listMonth()
    {
        return [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];
    }

    public static function listColor()
    {
        return [
            '#5f76e8',
            '#ff4f70',
            '#01caf1',
            '#aeb3e2',
            '#fbc3c8',
            '#f87bd3',
            '#dfe456',
            '#edba67',
            '#ff76da',
            '#00d8b4',
            '#cc35da',
            '#edf2f6',
        ];
    }
}