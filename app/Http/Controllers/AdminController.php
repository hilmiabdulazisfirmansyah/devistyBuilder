<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\notifications\Message;
use \App\Role;
use Auth;

class AdminController extends Controller
{
    public function index(){
    	$role = Role::find(Auth::user()->role_id);
    	$role = $role->nama;
		return redirect($role.'/dashboard');
    }

    public function show($admin){
    	$title = 'SmartApp Versi 2.0';
		$notification_messages = Message::all();

		//redirect page
		$page = $admin;
		$role = Role::find(Auth::user()->role_id);
		$role = $role->nama;

		//handle notification error di sidebar
		$error_page = 'Dashboard';
		$message_errors = '1';


		return view('admin.index',compact(
			'title', 'notification_messages', 'error_page', 'message_errors', 'page', 'role'
		));
    }

}
