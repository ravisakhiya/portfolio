<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeneralController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$generals = General::get()->all();
		return view('admin.layouts.general-index', compact('generals'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.layouts.general-create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$request->validate([
			// 'title' => 'required',
			// 'image' => 'required|mimes:jpeg,png,jpg|max:2048',
			// 'resume' => 'required|mimes:pdf|max:2048',
			// 'detail' => 'required',
		]);

		// image
		$header_logo = '';
		$file = $request->file('header_logo');
		Storage::makeDirectory(public_path('uploads/logo/' . $file));
		$header_logo = 'header_logo' . rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
		$file->move(public_path("uploads/logo"), $header_logo);

		//Favicon

		$favicon = '';
		$file1 = $request->file('favicon');
		Storage::makeDirectory(public_path('uploads/logo/' . $file1));
		$favicon = 'favicon_' . rand(00000, 99999) . '.' . $file1->getClientOriginalExtension();
		$file1->move(public_path("uploads/logo"), $favicon);

		// Resume

		$footer_logo = '';
		$file2 = $request->file('footer_logo');
		$footer_logo = 'footer_logo' . rand(00000, 99999) . '.' . $file2->getClientOriginalExtension();
		$file2->move(public_path("uploads/logo"), $footer_logo);

		// Insert record
		$general = new General();
		$general->site_title = $request->site_title;
		$general->favicon = $favicon;
		$general->header_logo = $header_logo;
		$general->footer_logo = $footer_logo;
		$general->footer_desc = $request->footer_desc;
		$general->facebook = $request->facebook;
		$general->instagram = $request->instagram;
		$general->twitter = $request->twitter;
		$general->linkedin = $request->linkedin;
		$general->mobile = $request->mobile;
		$general->email = $request->email;
		$general->address = $request->address;
		$general->tags = $request->tags;

		$general->save();
		return redirect()->route('general.index')->with('success', 'General Setting created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\General  $general
	 * @return \Illuminate\Http\Response
	 */
	public function show(General $general) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\General  $general
	 * @return \Illuminate\Http\Response
	 */
	public function edit(General $general) {
		return view('admin.layouts.general-edit', compact('general'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\General  $general
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, General $general) {

		$input = $request->all();

		// $banner = Product::where('id', $product->id)->first();
		// dd($banner);
		if ($request->header_logo != "") {
			if ($general->header_logo != "") {
				unlink(public_path("uploads/logo/" . $general->header_logo));
			}

			$file_name = '';
			$file = $request->file('header_logo');
			$file_name = 'header_logo' . rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
			if (!$file->move(public_path("uploads/logo"), $file_name)) {
				return back()->with('error', 'Oops.! something went wrong.');
			}

			$input['header_logo'] = $file_name;
		}

		if ($request->favicon != "") {
			if ($general->favicon != "") {
				unlink(public_path("uploads/logo/" . $general->favicon));
			}

			$favicon_name = '';
			$file1 = $request->file('favicon');
			$favicon_name = 'favicon_' . rand(00000, 99999) . '.' . $file1->getClientOriginalExtension();
			if (!$file1->move(public_path("uploads/logo"), $favicon_name)) {
				return back()->with('error', 'Oops.! something went wrong.');
			}

			$input['favicon'] = $favicon_name;
		}

		if ($request->footer_logo != "") {
			if ($general->footer_logo != "") {
				unlink(public_path("uploads/logo/" . $general->footer_logo));
			}

			$footer_logo_name = '';
			$file2 = $request->file('footer_logo');
			$footer_logo_name = 'footer_logo_' . rand(00000, 99999) . '.' . $file2->getClientOriginalExtension();
			if (!$file2->move(public_path("uploads/logo"), $footer_logo_name)) {
				return back()->with('error', 'Oops.! something went wrong.');
			}

			$input['footer_logo'] = $footer_logo_name;
		}

		$general->update($input);

		return redirect()->route('general.index')->with('success', 'Setting updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\General  $general
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(General $general) {
		//
	}
}
