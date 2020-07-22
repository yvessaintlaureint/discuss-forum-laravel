@extends('layouts.app')

@section('content')
  <div class="container">
    <h3 class="mt-2 mb-3 font-weight-bold">{{$thread->question}}</h3>
    <a href="#" class="btn btn-secondary"><i class="fas fa-edit mr-1"></i>Answer</a>
    @if($thread->user_id == auth()->user()->id)
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal" >Edit</button>
    {{-- <a href="/threads/{{$thread->id}}/edit" class="btn btn-success ml-auto">Edit</a> --}}
    
    <!-- Modal -->
    <div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Edit Pertanyaan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
                <form method="post" action="/threads/{{$thread->id}}">
                  @method('patch')
                  @csrf
                  <div class="form-group">
                    <label for="question">Edit your question</label>
                    <textarea class="form-control @error('question') is-invalid @enderror" name="question" id="question" rows="5" value="{{$thread->question}}">{{$thread->question}}</textarea>
                    <div class="invalid-feedback">
                      Please enter a question.
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
      </div>
    </div>
    
    
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