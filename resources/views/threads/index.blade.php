@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="col-8 mx-auto">
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
                    <?php $cond = count($thread->replies); $someText = "Answer" ?>
                    @if($cond!=1)
                        <?php $someText = "Answers"; ?>
                    @endif
                    <div class="card rounded my-2">
                        <div class="card-body">

                            <small class="card-subtitle text-muted">{{$thread->user->name}} · {{$thread->created_at}} · {{count($thread->replies)}} {{$someText}}</small>
                            <h5 class="card-title thread-thumbnail"><a href="/threads/{{$thread->id}}" class="text-dark">{{$thread->question}}</a></h5>
                            
                            <p class="reply-thumbnail"> <?php $a = $thread->replies->first(); if (isset($a->body)) {echo $a->body;} ?> </p>

                        </div>
                    </div>
                @endforeach
            @else
                <p>No threads found</p>
            @endif
        </div>
    </div>
@endsection