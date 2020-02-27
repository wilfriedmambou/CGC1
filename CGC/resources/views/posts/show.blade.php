@extends('template')

@section('content')
@if(Auth::user()->isAdmin())
enter code here

<div class="container">
    <h1>{{ $post->title }} </h1>
    <h5> Submitted By: {{ $post->user->name }},
        {{$post->created_at->diffForHumans()}}</p>
    </h5>
    <hr />
    <p class="lead">
        {{ $post->content }}

        @if ($post->comment->count()>0)
        @foreach ($post->comment as $comment)
        <div class="card-body">
            <p class="card-header">
                {{$comment->title}}
                <br>
                Answered By {{ $comment->user->name }}, {{ $comment->created_at->diffForHumans() }}
            </p>
        </div>

        @endforeach
        @else
        <p>il ya pas de commentaires pour ce post merci </p>
        @endif
        <hr />

        <!-- display the form, to submit a new answer -->
        <form action="{{ route('comments.store') }}" method="POST">
            {{ csrf_field() }}

            <h4>Submit Your Own Commentaire:</h4>
            <textarea class="form-control" name="title" rows="4"></textarea>
            <input type="hidden" value="{{ $post->id }}" name="post_id" />
            <button class="btn btn-primary">Submit post</button>
        </form>
</div>



</div>
@endif
@endsection