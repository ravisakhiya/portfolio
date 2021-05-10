<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$service = Service::get()->all();
		return view('admin.layouts.service-index', compact('service'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.layouts.service-create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		// Validation
		$request->validate([
			'icons' => 'required',
			'title' => 'required',
			'detail' => 'required',
		]);

		// Insert record
		$about = new service();
		$about->title = $request->title;
		$about->icons = $request->icons;
		$about->detail = $request->detail;

		$about->save();
		return redirect()->route('service.index')->with('success', 'Service created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Service $service) {
		return view('admin.layouts.service.index', compact('service'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Service $service) {
		return view('admin.layouts.service-edit', compact('service'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Service $service) {

		$request->validate([
			'icons' => 'required',
			'title' => 'required',
			'detail' => 'required',
		]);

		$input = $request->all();

		$service->update($input);

		return redirect()->route('service.index')->with('success', 'Service created successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Service $service) {

		$service->delete();
		return redirect()->route('service.index')
			->with('success', 'Product deleted successfully');
	}
}
