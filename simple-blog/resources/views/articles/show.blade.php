@extends('layout.master')

@section('head.title')
	Simple Blog | Detail article page
@stop

@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p><a href="{!! route('article.index') !!}"> << Back to Articles List</a> | <small>{!! $article->title !!}</small></p>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{!! $article->title !!}</div>

				<div class="panel-body">
					<p>
					{!! $article->content !!}
					</p>
					<p class='text-right'><a href="#"> + Read more..</a></p>
				</div>
			</div>
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>{!! $article->title !!}</h2>
			<p>
			{!! $article->content !!}
			</p>
		</div>
	</div>
</div>
@stop