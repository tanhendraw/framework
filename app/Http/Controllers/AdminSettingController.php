<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class AdminSettingController extends Controller {

	protected $instance = 'Setting';
	protected $title = array(
		'name',
		'value',
	);
	protected $field = array(
		'text',
		'value',
	);
	protected $field2 = array(
		'text',
		'value',
	);

	public function model(){
		$model = new \App\Setting;
		return $model;
	}

	public function index()
	{
		$database = $this->model()->All();

		foreach($database as $data){
		}

		return view('admin'.$this->instance.'.index', array(
			'active' => $this->instance,
			'title' => $this->title,
			'field' => $this->field,
			'database' => $database
		));
	}

	public function create()
	{
		return view('admin'.$this->instance.'.create',[
			'active' => $this->instance
		]);
	}

	public function store()
	{
		$data = $this->model();
		foreach($this->field2 as $f) {
			$data->$f = Input::get($f);
		}
		$data->save();

		return redirect('admin'.$this->instance)->with('message', 'Data Successfully Added !');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$data = $this->model()->find($id);
		return view('admin'.$this->instance.'.edit',array(
			'active' => $this->instance,
			'data' => $data,
			'id' => $id
		));
	}

	public function update($id)
	{
		$data = $this->model()->find($id);
		foreach($this->field2 as $f) {
			$data->$f = Input::get($f);
		}
		$data->save();
		Log::info(Input::All());
		return redirect('admin'.$this->instance.'/'.$id.'/edit')->with('message', 'Data Successfully Updated !');
	}

	public function destroy($id)
	{
		$this->model()->find($id)->delete();
		return redirect('admin'.$this->instance)->with('message', 'Data Deleted !');
	}

}
