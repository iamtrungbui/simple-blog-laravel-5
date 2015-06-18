@extends('layout.master')

@section('head.title')
	Simple Blog | Home Page
@stop

@section('body.content')
<div class="container">
	<div class="row">
		@if (Session::has('message'))
			<div class="alert alert-success text-center">
				<strong>{!! Session::get('message') !!}</strong><br><br>
			</div>
		@endif
	</div>
	@foreach($articles as $article)
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="panel-title">&nbsp;&nbsp;&nbsp;&nbsp;{!! $article->title !!}</span>
			        <div class=" pull-right">
			        	 <a href="{!! route( 'article.edit' , $article->id ) !!}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-edit"></span></a>
			            {!! Form::open([
			            	'route' 	=> [ 'article.detroy', $article->id ],
			            	'method'	=>	'DELETE',
			            	'style'		=>	'display:inline'
			            ]) !!} 
			            <button type='submit' class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove"></span></button>
			            {!! Form::close() !!}
			        </div>
			        <div class="clearfix"></div>
				</div>

				<div class="panel-body">
					<p>
					{!! $article->content !!}
					</p>
					<p class='text-right'><a href="{!! route('article.show', $article->id) !!}"> + Read more..</a></p>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			{!! $articles->render() !!}
		</div>		
	</div>	
</div>
@stop