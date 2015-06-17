@extends('layout.master')

@section('head.title')
	Simple Blog | Home Page
@stop

@section('body.content')
<div class="container">
	@foreach($articles as $article)
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="panel-title">{!! $article->title !!}</span>
			        <div class="btn-group pull-right">
			            <a href="{!! route( 'article.edit' , $article->id ) !!}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-edit"></span></a>
			                
			            <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove"></span></a>
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
</div>
@stop