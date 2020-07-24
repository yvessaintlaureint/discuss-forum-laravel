@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-8 mx-auto mt-3">
      <form method="post" action="/replies/{{$reply->id}}">
        @method('put')
        @csrf
        <div class="form-group">
          <label for="body">Edit your answer:</label>
          <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="5" value="{{$reply->body}}">{{$reply->body}}</textarea>
          <div class="invalid-feedback">
            Please enter an answer.
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection