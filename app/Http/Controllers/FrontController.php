<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use App\Category;
use App\General;
use App\Project;
use App\Service;

class FrontController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$banner = Banner::first();
		$about = About::first();
		$services = Service::get()->all();
		$categorys = Category::get()->all();
		$projects = Project::get()->all();
		$general = General::first();
		return view('home', compact('banner', 'about', 'services', 'categorys', 'projects', 'general'));
	}

}
