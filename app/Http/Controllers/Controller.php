<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Setting;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	public function __construct()
	{
		$setting = array(
			'websiteTitle' => Setting::where('param','=','websiteTitle')->get()->toArray()[0]['value'],
			'mainMetaDesc' => Setting::where('param','=','mainMetaDesc')->get()->toArray()[0]['value'],
			'mainMetaKeywords' => Setting::where('param','=','mainMetaKeywords')->get()->toArray()[0]['value'],
		);
		view()->share('setting', $setting);
	}

	public function notFound(){
		return redirect('/auth/login');
	}
}
