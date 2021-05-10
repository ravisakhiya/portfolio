<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$Categorys = Category::get()->all();
		$projects = Project::get()->all();
		return view('admin.layouts.project-index', compact('projects', 'Categorys'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Category $category) {
		$categorys = Category::get()->all();
		return view('admin.layouts.project-create', compact('projects', 'categorys'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */

	public function store(Request $request) {
		$request->validate([
			'image' => 'required',
			'name' => 'required',
			'category' => 'required',
			'detail' => 'required',
		]);

		$file_name = '';
		$file = $request->file('image');
		Storage::makeDirectory(public_path('uploads/projects/' . $file));
		$file_name = rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
		$file->move(public_path("uploads/projects"), $file_name);

		$project = new Project();
		$project->image = $file_name;
		$project->name = $request->name;
		$project->category = $request->category;
		$project->detail = $request->detail;

		$project->save();
		// Product::insert($request->all());
		return redirect()->route('projects.index')->with('success', 'Project created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function show(Project $project) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Project $project, Category $category) {
		$categorys = Category::get()->all();
		return view('admin.layouts.project-edit', compact('project', 'categorys'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Project $project) {
		$request->validate([
			'name' => 'required',
			'category' => 'required',
			'detail' => 'required',
		]);

		$input = $request->all();

		// $banner = Product::where('id', $product->id)->first();
		// dd($banner);
		if ($request->image != "") {
			if ($project->image != "") {
				unlink(public_path("uploads/projects/" . $project->image));
			}

			$file_name = '';
			$file = $request->file('image');
			$file_name = rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
			if (!$file->move(public_path("uploads/projects"), $file_name)) {
				return back()->with('error', 'Oops.! something went wrong.');
			}

			$input['image'] = $file_name;
		}

		$project->update($input);

		return redirect()->route('projects.index')->with('success', 'Project updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Project $project) {
		unlink(public_path("uploads/projects/" . $project->image));

		$project->delete();
		return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
	}
}
