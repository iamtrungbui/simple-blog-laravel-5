<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller {

	public function index(){
		$articles = Article::all();
		return view( 'articles.index' )->with( [ 'articles' => $articles ] );
	}

	public function show( $id ){
		$article = Article::find( $id );
		return view( 'articles.show' )->with( [ 'article' => $article ] );
	}

}
