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
                            <h5 class="card-title font-weight-bold"><a href="/threads/{{$thread->id}}" class="text-dark">{{$thread->question}}</a></h5>
                            <small class="card-subtitle mb-2 text-muted">{{$thread->user->name}} . {{$thread->created_at}}</small>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No threads found</p>
                @endif
            </div>
        </div>
    </div>
@endsection
