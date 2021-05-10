<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$about = About::get()->all();
		return view('admin.layouts.about-index', compact('about'));
		// return view('admin.layouts.banner');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.layouts.about-create');
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
			'title' => 'required',
			'image' => 'required|mimes:jpeg,png,jpg|max:2048',
			'resume' => 'required|mimes:pdf|max:2048',
			'detail' => 'required',
		]);

		// image
		$file_name = '';
		$file = $request->file('image');
		$file_name = rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
		$file->move(public_path("uploads/about"), $file_name);

		// Resume

		$resume_name = '';
		$resume = $request->file('resume');
		$resume_name = 'resume_' . rand(00000, 99999) . '.' . $resume->getClientOriginalExtension();
		Storage::makeDirectory(public_path('uploads/resume/' . $resume));
		$resume->move(public_path("uploads/resume"), $resume_name);

		// Insert record
		$about = new About();
		$about->title = $request->title;
		$about->image = $file_name;
		$about->resume = $resume_name;
		$about->detail = $request->detail;

		$about->save();
		return redirect()->route('about.index')->with('success', 'Record created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\About  $about
	 * @return \Illuminate\Http\Response
	 */

	public function show(About $about) {
		return view('admin.layouts.about.index', compact('about'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function edit(About $about) {
		return view('admin.layouts.about-edit', compact('about'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, About $about) {
		$request->validate([
			'title' => 'required',
			'detail' => 'required',
		]);

		$input = $request->all();

		if ($request->image != "") {

			if ($about->image != "") {
				unlink(public_path("uploads/about/" . $about->image));
			}

			$file_name = '';
			$file = $request->file('image');
			$file_name = rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
			if (!$file->move(public_path("uploads/about"), $file_name)) {
				return back()->with('error', 'Oops.! something went wrong.');
			}

			$input['image'] = $file_name;
		}

		if ($request->resume != "") {

			if ($about->resume != "") {
				unlink(public_path("uploads/resume/" . $about->resume));
			}

			$resume_name = '';
			$resume = $request->file('resume');
			$resume_name = 'resume_' . rand(00000, 99999) . '.' . $resume->getClientOriginalExtension();
			if (!$resume->move(public_path("uploads/resume"), $resume_name)) {
				return back()->with('error', 'Oops.! something went wrong.');
			}

			$input['resume'] = $resume_name;
		}

		$about->update($input);

		return redirect()->route('about.index')
			->with('success', 'Record updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Banner $about) {
		//
	}
}
