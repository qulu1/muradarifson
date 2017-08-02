<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Singer;
use App\Gallery;
use App\Interview;
use App\Composer;
use DB;




class RouteController extends Controller
{
	public function home(){
		return view("home.home");
	}

	public function singer(){
		$singer = Singer::paginate(6);
		return view("home.singer", compact('singer'));
	}

	public function composer(){
		$composer = Composer::paginate(6);
		return view("home.composer", compact('composer'));
	}

	public function gallery(){
		$gallery = Gallery::all();
		return view("home.gallery", compact('gallery'));
	}

	public function about(){
		return view("home.about_me");
	}

	public function interview(){
		$interview = Interview::all();
		return view("home.interview", compact('interview'));
	}

	public function notfound(){
		return view("errors.503");
	}
}
