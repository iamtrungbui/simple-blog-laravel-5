@extends('layout.master')

@section('head.title')
	Simple Blog | Create new article
@stop

@section('head.css')
	{!! Html::style('css/redactor.css') !!}
@stop

@section('body.content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p><a href="{!! route('article.index') !!}"> << Back to Articles List</a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add new article</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					@if (Session::has('message'))
						<div class="alert alert-success text-center">
							<strong>{!! Session::get('message') !!}</strong><br><br>
						</div>
					@endif

					{!! Form::open([
						'route'		=> 	'article.store',
						'method'	=>	'POST',
						'class'		=>	'form-horizontal'

					]) !!}

					@include( 'articles._input' , [ 'button_name' => 'Create Article' ] )

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('body.js')
	{!! Html::script('js/redactor.min.js') !!}
	{!! Html::script('js/article/create.js') !!}
@stop
