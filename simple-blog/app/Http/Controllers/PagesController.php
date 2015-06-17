<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use Redirect;

class PagesController extends Controller {

	
	public function index(){
		return Redirect::route('article.index');
	}


}
