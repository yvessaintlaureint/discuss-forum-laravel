@extends('layouts.app')

@section('content')
  <div class="container">
    @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
    <h3 class="mt-2 mb-3 font-weight-bold">{{$thread->question}}</h3>
    <h6 class="card-subtitle mb-2 text-muted">{{$thread->user->name}} · {{$thread->created_at}}</h6>

    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#answer" ><i class="fas fa-edit mr-1"></i>Answer</button>
    {{-- <a href="/replies" class="btn btn-secondary"><i class="fas fa-edit mr-1"></i>Answer</a> --}}

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
    <?php $cond = count($thread->replies); $someText = "Answer" ?>

    @if($cond!=1)
    <?php $someText = "Answers"; ?>
    @endif

    <hr>
    <h6>{{count($thread->replies)}} {{$someText}}</h6>
    <hr>
    <p>

      @foreach($thread->replies as $reply)

      <div class="card rounded my-2">
        <div class="card-body">
          @if($reply->user_id == auth()->user()->id)
            <a href="/replies/{{$reply->id}}/edit" class="btn btn-success ml-auto float-right" style="margin-left:5px; margin-right: 5px;">Edit</a>
            <form action="/replies/{{$reply->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger float-right" style="margin-left:5px; margin-right: 5px;">Delete</button>
            </form>
          @endif
          <h5 class="card-title font-weight-bold text-dark">{{$reply->body}}</h5>
          <small class="card-subtitle mb-2 text-muted">{{$reply->user->name}} · {{$reply->created_at}}</small>
        </div>
      </div>

      @endforeach

    </p>
  </div>

      <div class="modal fade" id="answer" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('storecomment', $thread->id)}}">
                            @csrf
                            <div class="form-group">
                                <label for="body">Input your answer</label>
                                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="5"></textarea>
                                <div class="invalid-feedback">
                                    Please enter an answer.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection