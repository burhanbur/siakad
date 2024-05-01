<?php 

namespace App\Services;

use Illuminate\Support\Facades\DB;

class GeneralService
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

	public function dateExpired()
	{
		$datetime = date('Y-m-d');

		return date('Y-m-d H:i:s', strtotime('+3 months', strtotime($datetime)));
	}
}