@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-8 mx-auto mt-3">
      <form method="post" action="/threads/{{$thread->id}}">
        @method('put')
        @csrf
        <div class="form-group">
          <label for="question">Input your question</label>
          <textarea class="form-control @error('question') is-invalid @enderror" name="question" id="question" rows="5" value="{{$thread->question}}">{{$thread->question}}</textarea>
          <div class="invalid-feedback">
            Please enter a question.
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection