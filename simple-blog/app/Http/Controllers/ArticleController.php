<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use Input;
use Session;
use App\Http\Requests\ArticleFormRequest;

class ArticleController extends Controller {

	public function index() {
		$articles = Article::orderBy('id','DESC')->paginate(5);
		return view( 'articles.index' )->with( [ 'articles' => $articles ] );
	}

	public function show( $id ) {
		$article = Article::find( $id );
		return view( 'articles.show' )->with( [ 'article' => $article ] );
	}

	public function create() {
		return view( 'articles.create' );
	}

	public function store( ArticleFormRequest $request ) {
		$input = $request->only( 'title', 'content' );
		if($request->has( '_token' )){
			Article::create([
				'title'		=>	$input[ 'title' ],
				'content'	=>	$input[ 'content' ]
			]);
			return redirect()->route( 'article.create' )->with( 'message', 'Added successfull' );
		} else {
			return redirect()->route( 'article.create' )->withInput();
		}
		
	}

	public function edit( $id ) {
		$article = Article::find( $id );
		return view( 'articles.edit' )->with( [ 'article' => $article  ] );
	} 
 
	public function update( $id, ArticleFormRequest $request ) {
		$article = Article::find( $id );
		$input = $request->only( 'title', 'content' );
		if($request->has( '_token' )){
			$article->update([
				'title'		=>	$input[ 'title' ],
				'content'	=>	$input[ 'content' ]
			]);
			return redirect()->route( 'article.edit',$id )->with( 'message', 'Updated successfull' );
		} else {
			return redirect()->route( 'article.edit',$id )->withInput();
		}
	}

	public function detroy( $id ) {
		$article = Article::find( $id );
		if($article->delete()){
			return redirect()->route( 'article.index',$id)->with( 'message', "Deleted successfull" );
		} else {
			return redirect()->route( 'article.index', $id)->with( 'message', 'Deleted Faild' );
		}
	} 

}
