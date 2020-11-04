@extends('plantilla')
@section('contenido')

{!! Form::open(['url' => 'foo/bar']) !!}
{{ Form::label('Se registro la marca ', null, ['class' => 'control-label']) }}
<div class="jumbotron bg-info " >
    {{ Form::text('', $marca, array_merge(['class' => 'form-control'], ['color'=>'red'])) }}
</div>

{!! Form::close() !!}
@endsection