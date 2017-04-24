<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class AdminPageController extends Controller {

	protected $instance = 'Page';
	protected $image = ['image'];
	protected $title = array(
		'page',
		'section',
		'eng',
		'image',
	);
	protected $field = array(
			'page',
			'section',
			'eng',
	);
	protected $field2 = array(
			'page',
			'section',
			'eng',
	);

	public function model(){
		$model = new \App\Page;
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
		$option[0]['value'] = '';
		$option[0]['text'] = '';
		$option[1]['value'] = '';
		$option[1]['text'] = '';
		$option[2]['value'] = '';
		$option[2]['text'] = '';
		return view('admin'.$this->instance.'.edit',array(
			'active' => $this->instance,
			'image' => $this->image,
			'data' => $data,
			'id' => $id,
			'option' => $option
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
