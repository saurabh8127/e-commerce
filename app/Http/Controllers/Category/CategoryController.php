<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index(Request $request){
		return view('pages.category.index');
	}

	//add category
	public function addCategory(Request $request){
		dd($request);
	}
}
