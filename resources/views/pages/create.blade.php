@extends('layouts.app')

@section('content')
<h1 class="text-center">Todos Create</h1>

{!! Form::open(['action' => 'TodosController@store','method'=>'POST']) !!}
    
{{ Form::bsText('text') }}
{{ Form::bsTextArea('body') }}
{{ Form::bsText('due') }}
{{ Form::bsSubmit('Submit',['class'=>'btn btn-success']) }}

{!! Form::close() !!}
 

@endsection  