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
				<div class="panel-heading">{!! $article->title !!}</div>

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