@extends('plantilla')
@section('contenido')



<div class="jumbotron bg-info " >
    
    {!! Form::open(['url' => 'foo/bar']) !!}
    {{ Form::label('Se registro el vehiculo con los datos:', null, ['class' => 'control-label']) }}

@foreach ($result as $result)
{{ Form::text('name',$result, array_merge(['class' => 'form-control'], ['color'=>'red'])) }}

@endforeach
{!! Form::close() !!}
</div>

@endsection