@extends('template')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p class="lead">
        {{ $post->content }}
    </p>

    <hr />
    <!-- display all of the answers for this question -->
    @if ($post->comment->count() > 0)
    @foreach ($post->comments as $comment)
    <div class="panel panel-default">
        <div class="panel-body">
            <p>
                {{ $comment->content }}
            </p>
        </div>
    </div>
    @endforeach
    @else
    <p>
        There are no comments for this Post yet. Please consider submitting one below!
    </p>
    @endif


    <hr />

    <!-- display the form, to submit a new answer -->
    <form action="{{ route('comment.store') }}" method="POST">
        {{ csrf_field() }}
        <textarea class="form-control" name="content" rows="4"></textarea>
        <input type="hidden" value="{{ $post->id }}" name="post_id" />
        <button class="btn btn-primary">Submit Comment</button>
    </form>
</div>
</div>
@endsection