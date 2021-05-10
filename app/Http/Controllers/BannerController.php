<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$banner = Banner::get()->all();
		return view('admin.layouts.banner-index', compact('banner'));
		// return view('admin.layouts.banner');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.layouts.banner');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$request->validate([
			'title' => 'required',
			'image' => 'required',
			'detail' => 'required',
		]);

		$file_name = '';
		$file = $request->file('image');
		$file_name = rand(00000, 99999) . '.' . $file->getClientOriginalExtension();

		$file->move(public_path("uploads/banner"), $file_name);

		$banner = new Banner();
		$banner->title = $request->title;
		$banner->image = $file_name;
		$banner->detail = $request->detail;

		$banner->save();
		return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Banner  $banner
	 * @return \Illuminate\Http\Response
	 */

	public function show(Banner $banner) {
		return view('admin.layouts.banner', compact('banner'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Banner  $banner
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Banner $banner) {
		return view('admin.layouts.banner-edit', compact('banner'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Banner  $banner
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Banner $banner) {
		$request->validate([
			'title' => 'required',
			'detail' => 'required',
		]);

		$input = $request->all();

		if ($request->image != "") {
			if ($banner->image != "") {
				unlink(public_path("uploads/banner/" . $banner->image));
			}

			$file_name = '';
			$file = $request->file('image');
			$file_name = rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
			if (!$file->move(public_path("uploads/banner"), $file_name)) {
				return back()->with('error', 'Oops.! something went wrong.');
			}

			$input['image'] = $file_name;
		}

		$banner->update($input);

		return redirect()->route('banner.index')
			->with('success', 'Banner updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Banner  $banner
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Banner $banner) {
		//
	}
}
