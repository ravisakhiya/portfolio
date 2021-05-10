<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {
	public function initContent() {
		return view('admin/login');
	}
}
