<div class="form-group">
	{!! Form::label( 'title', 'Title', [ 'class' => 'col-md-2 control-label' ] ) !!}
	<div class="col-md-9">
		{!! Form::text( 'title' , null , [ 'class' => 'form-control' , 'placeholder' => 'title here ...' ] ) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label( 'content' , 'Content' , [ 'class' => 'col-md-2 control-label' ] ) !!}
	<div class="col-md-9">
		{!! Form::textarea( 'content' , null , [ 'class' => 'form-control' , 'id' => 'content' , 'placeholder' => 'content here ...' ] ) !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-9 col-md-offset-2">
		{!! Form::submit( $button_name , [ 'class' => 'btn btn-sm btn-primary btn-block' ] ) !!}
	</div>
</div>