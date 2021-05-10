<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$categorys = Category::get()->all();
		return view('admin.layouts.category-index', compact('categorys'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.layouts.category-create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$request->validate([
			'name' => 'required',
			'slug' => 'required',
		]);

		$category = new Category();
		$category->name = $request->name;
		$category->slug = $request->slug;

		$category->save();
		// Product::insert($request->all());
		return redirect()->route('category.index')->with('success', 'Category created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function show(Category $category) {

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Category $category) {
		return view('admin.layouts.category-edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Category $category) {
		$request->validate([
			'name' => 'required',
			'slug' => 'required',
		]);

		$input = $request->all();

		$category->update($input);

		return redirect()->route('category.index')->with('success', 'Category created successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Category $category) {

		$category->delete();
		return redirect()->route('category.index')
			->with('success', 'Category deleted successfully');
	}
}
