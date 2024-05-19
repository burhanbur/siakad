<?php 

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class QueryService
{
	private static $instance = null;

	public static function getInstance()
	{
        if (self::$instance == null) {
            self::$instance = new QueryService();
        }

        return self::$instance;
	}

	public function getInstitutionByUserId($userId)
	{
		$returnValue = [];

		$sql = "
			SELECT mi.name FROM model_has_roles AS mhr 
			JOIN users AS usr ON usr.id = mhr.model_id 
			LEFT JOIN master_institutions AS mi ON mi.id = mhr.institution_id 
			WHERE mhr.model_id = ?
		";

		@$data = DB::select($sql, [$userId])[0];

		if ($data) {
			$returnValue = $data;
		}

		return $returnValue;
	}
}