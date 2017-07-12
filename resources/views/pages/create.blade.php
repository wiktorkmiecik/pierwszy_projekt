@extends('layout')

@section('content')
{!! Form::open(['route' => 'pages.store']) !!}


@if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="btn btn-danger">{{ $error }}</div>
            @endforeach
    @endif


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
<div class="form-group">
	{!! Form::label('title', "Title:") !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('content', "Treść:") !!}
	{!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('url', "Link:") !!}
	{!! Form::text('url', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('nick', "Nick:") !!}
	{!! Form::text('nick', null, ['class'=>'form-control']) !!}
</div>

  <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

</div>
	</div>
		</div>
			</div>
{!! Form::close() !!}
@endsection