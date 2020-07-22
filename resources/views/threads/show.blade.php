@extends('layouts.app')

@section('content')
  <div class="container">
    <h3 class="mt-2 mb-3 font-weight-bold">{{$thread->question}}</h3>
    <a href="#" class="btn btn-secondary"><i class="fas fa-edit mr-1"></i>Answer</a>
    @if($thread->user_id == auth()->user()->id)
    <a href="/threads/{{$thread->id}}/edit" class="btn btn-success ml-auto">Edit</a>
    <form action="/threads/{{$thread->id}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    @endif
    <hr>
    <h6>[count($post->answer)] Answers</h6>
    <hr>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusamus consectetur labore ipsam rerum facilis adipisci doloremque atque quasi culpa, magni natus cumque quod accusantium ipsum, tenetur maiores deleniti tempore est quam amet quia quos eveniet eligendi? Illo assumenda consequatur ipsa, delectus quos quia dicta harum, recusandae vitae, error rem.</p>
  </div>
@endsection