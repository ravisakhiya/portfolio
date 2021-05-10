<?php

namespace App\Http\Controllers;
use App\About;
use App\Banner;
use App\Category;
use App\ContactUS;
use App\General;
use App\Project;
use App\Service;
use Illuminate\Http\Request;
use Mail;

// use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
	// public function contact() {
	// 	$banner = Banner::first();
	// 	$about = About::first();
	// 	$services = Service::get()->all();
	// 	$categorys = Category::get()->all();
	// 	$projects = Project::get()->all();
	// 	$general = General::first();
	// 	return view('pages.contact-us', compact('banner', 'about', 'services', 'categorys', 'projects', 'general'));
	// }

	// public function contactSubmit(Request $request) {
	// 	Mail::send('emails.contactmail', [
	// 		'name' => $request->name,
	// 		'email' => $request->email,
	// 		'phone' => $request->phone,
	// 		'msg' => $request->msg,
	// 	], function ($mail) use ($request) {
	// 		$mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
	// 		$mail->to("mr.sakhiya.01@gmail.com")->subject('Contact Us Message');
	// 	});
	// 	return redirect()->route('contact')->with('success', 'Message has been sent successfully');
	// }

	public function contact() {
		$banner = Banner::first();
		$about = About::first();
		$services = Service::get()->all();
		$categorys = Category::get()->all();
		$projects = Project::get()->all();
		$general = General::first();
		return view('home', compact('banner', 'about', 'services', 'categorys', 'projects', 'general'));
	}

	public function contactSubmit(Request $request) {

		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'budget' => 'required',
			'company' => 'required',
			'manager' => 'required',
			'message' => 'required',
		]);

		// Insert record
		$contact = new ContactUS();
		$contact->name = $request->name;
		$contact->email = $request->email;
		$contact->phone = $request->phone;
		$contact->budget = $request->budget;
		$contact->company = $request->company;
		$contact->manager = $request->manager;
		$contact->message = $request->message;

		$contact->save();

		Mail::send('emails.contactmail', [
			'mail_name' => $request->name,
			'mail_email' => $request->email,
			'mail_phone' => $request->phone,
			'mail_budget' => $request->budget,
			'mail_company' => $request->company,
			'mail_manager' => $request->manager,
			'mail_message' => $request->message,
		], function ($mail) use ($request) {
			$mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
			$mail->to("mr.sakhiya.01@gmail.com")->subject('Contact Us Message');
		});

		return redirect()->route('home')->with('success', 'Message has been sent successfully');
	}
}
