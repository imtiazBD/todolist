@extends('layouts.app')

@section('content')
<h1 class="text-center">Todos List</h1>

@if(count($todos) > 0)
    @foreach($todos as $todo )
       <div class="card card-body bg-light">
       	  <h3><a href="todo/{{$todo->id}}">{{ $todo->text }}</a></h3>
       	  <span class="text-danger"><i>{{ $todo->due }}</i></span>

       	</div>

    

    @endforeach
     	{{ $todos->links() }}
  @else
  <h1 style="color:red">Wopss !! No data Found</h1>
@endif

@endsection