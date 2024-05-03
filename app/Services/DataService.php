<?php 

namespace App\Services;

use Illuminate\Support\Facades\DB;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class DataService
{
	public function __construct() 
	{

	}

	public static function readCsv($filecsv)
	{
		$fileContent = array();
		$first_line = 1;
		$filePointer = fopen($filecsv, 'rb');

		if ($filePointer != false) {
			while (!feof($filePointer)) {
				$fileData = fgetcsv($filePointer, 4096);

				if ($first_line == 1) {
					$first_line = 2;
				} else {
					if ($fileData) { 
						array_push($fileContent,$fileData);
					}  
				}
			}

			fclose($filePointer);
		}

		return $fileContent;
	}

	public static function readExcel($fileExcel)
	{
		$spreadsheet = IOFactory::load($fileExcel);
        $worksheet = $spreadsheet->getActiveSheet();
        $table = array();
        $tablerows = array();

        foreach($worksheet->getRowIterator() as $row) {
            $cells = $row->getCellIterator();
            $cells->setIterateOnlyExistingCells(true);

            $i = 0;
            foreach($cells as $cell) {
                if(isset($table[0])) {
                    $tablerows[$table[0][$i]] = $cell->getValue();
                    $i++;
                } else {
                    array_push($tablerows,$cell->getValue());
                }
            }

            $i=0;
            array_push($table,$tablerows);
            $tablerows = array();
        }
        return $table;
	}
}