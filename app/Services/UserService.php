<?php 

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

use App\Models\User;

class UserService
{
	private static $instance = null;

	public static function getInstance()
	{
        if (self::$instance == null) {
            self::$instance = new UserService();
        }

        return self::$instance;
	}

	public function generateUsername($name)
	{
		$returnValue = null;

		return $returnValue;
	}
}