@extends('layouts.app')

@section('content')
<h1 class="text-center">Todos Details</h1>

 <div class="card card-body bg-light">

<h1>{{ $todo->text }}</h1>
<span class="text-danger"><i>{{ $todo->due }}</i></span>
 <h3>Details :</h3>
<p>{{ $todo->body }}</p> 
 </div>

<a class="btn btn-info" href="/">Back</a>
 <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary" >Edit</a> 

    {!! Form::open(['action'=>['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'pull-right']) !!}
    {{ Form::hidden('_method','DELETE') }}
    {{  Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
    {!! Form::close() !!} 

@endsection