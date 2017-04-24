<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class HomeController extends Controller {

	public function __construct()
	{
       parent::__construct();
	}

	public function index()
	{
		return view('home');
	}

	public function send(){
		Mail::send('emails/index', [
				'name' => Input::get("name"),
				'email' => Input::get("email"),
				'occupation' => Input::get("occupation"),
				'an' => Input::get("an"),
				'messagecontent' => Input::get("message"),
		], function($message)
		{
			$from = \App\Setting::where('param','SenderEmail')->first();
			$to = \App\Setting::where('param','SenderEmail')->first();
			$customer = Input::get("name");
			$message->from($from->value, 'Customer');
			$message->to($to->value , '')->subject($customer." is contacting you");
		});
		$email = new \App\Email();
		$email->name= Input::get("name");
		$email->email= Input::get("email");
		$email->occupation= Input::get("occupation");
		$email->an= Input::get("an");
		$email->message= Input::get("message");
		$email->save();
		return view('home/thank');
	}

	public function thank(){
		return view('home/thank',[
				'page'=>'contact'
		]);
	}

}
