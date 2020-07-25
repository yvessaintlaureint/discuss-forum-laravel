@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-8 mx-auto">
                <h3 class="font-weight-bold">Your threads</h3>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(count($threads) > 0)
                    @foreach($threads as $thread)
                        <div class="card rounded my-2">
                            <div class="card-body">
                            <h5 class="font-weight-bold"><a href="/threads/{{$thread->id}}" class="text-dark">{{$thread->question}}</a></h5>
                            <small class="card-subtitle mb-2 text-muted">{{$thread->created_at}} · {{$thread->updated_at}}</small>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>You have not made any threads yet.</p>
                @endif
            </div>
            <br><br>
            <div class="col-8 mx-auto">
            <h3 class="font-weight-bold">Your answers</h3>
            <hr>
            <?php 
            use App\Reply; 
            $id = auth()->user()->id; 
            $repliess = Reply::where('user_id', $id)->get(); 
            $repliess = $repliess->sortByDesc('created_at');
            ?>
            @if(count($repliess) > 0)
                @foreach($repliess as $repli)
                        <div class="card rounded my-2">
                            <div class="card-body">
                            <h5 class="font-weight-bold"><a href="/threads/{{$repli->thread_id}}" class="text-dark">{{$repli->body}}</a></h5>
                            <small class="card-subtitle mb-2 text-muted">{{$repli->created_at}} · {{$repli->updated_at}}</small>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>You have not made any answers yet.</p>
                @endif
            </div>

        </div>
    </div>
@endsection
