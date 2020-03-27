<?php
namespace App\Http\Controllers\Admin;
//use App\DataTables\ContactsDataTable;
use App\Http\Controllers\Controller;
use App\Model\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		 $sites = Contacts::all();
          return view('backend.contacts.index', compact('sites'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('backend.contacts.create', ['title' => trans('site.create_cities')]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store() {

		$data = $this->validate(request(),
			[
				'name'    => 'required',
				'email'   => 'required',
				'phone'   => 'required|numeric',
				'message' => '',

			], [], [
				'name' => trans('site.name'),
				'email' => trans('site.email'),
				'phone'   => trans('site.phone'),

			]);

		Contacts::create($data);
		session()->flash('success', trans('site.record_added'));
		return redirect(aurl('/contacts'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$site = Contacts::find($id);
		
		return view('backend.contacts.edit', compact('site'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $r, $id) {
         $data = $this->validate(request(),
			[
				'name'    => 'required',
				'email'   => 'required',
				'phone'   => 'required|numeric',
				'message' => '',

			], [], [
				'name' => trans('site.name'),
				'email' => trans('site.email'),
				'phone'   => trans('site.phone'),
			]);

		Contacts::where('id', $id)->update($data);
		session()->flash('success', trans('site.updated_record'));
		return redirect(aurl('/contacts'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$cities = Contacts::find($id);

		$cities->delete();
		session()->flash('success', trans('site.deleted_record'));
		return redirect(aurl('/contacts'));
	}

	public function multi_delete() {
					return request('item');

		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$cities = Contacts::find($id);
				$cities->delete();
			}
		} else {
			$cities = Contacts::find(request('item'));
			$cities->delete();
		}
		session()->flash('success', trans('site.deleted_record'));
		return redirect(aurl('/contacts'));
	}
}
