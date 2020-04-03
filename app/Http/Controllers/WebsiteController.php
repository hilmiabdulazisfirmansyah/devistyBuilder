<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Auth;
use DB;

class WebsiteController extends Controller
{
	public function index(){
		$navbar 		= DB::connection('web')->table('navbar')->get();
		$carousels 		= DB::connection('web')->table('carousels')->get();
		$posts 			= DB::connection('web')->table('posts')->get();
		$pendidik 		= DB::connection('web')->table('guru')->get();
		$smartschools 	= DB::connection('web')->table('smartschool')->get();
		$testimonial 	= DB::connection('web')->table('testimoni')->get();
		$profiles		= DB::connection('web')->table('profiles')->get();
		$jurusan		= DB::connection('web')->table('jurusan')->get();
		$program		= DB::connection('web')->table('program')->get();
		$ekskul			= DB::connection('web')->table('ekskul')->get();
		$posts 			= DB::connection('web')->table('posts')->orderBy('created_at','desc')->get();

		$role 			= 'guest';

		if (Auth::user()) {
			$role = Role::find(Auth::user()->role_id);
			$role = $role->nama;
		}

		return View('blog.index',
			compact(
				'navbar',
				'carousels',
				'posts',
				'pendidik',
				'smartschools',
				'testimonial',
				'profiles',
				'jurusan',
				'program',
				'ekskul',
				'role'	));
	}

	public function show($website){

		return View('admin.index.'.$website);
	}
}
