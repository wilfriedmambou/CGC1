@extends('template')
@section('content')

<h2>Posts Recet</h2>
<div class="row">
    @foreach ($posts as $post)
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-header">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text" style="color:grey"> {{$post->user->name}} </p>
                {{$post->created_at->diffForHumans()}}
                <p class="card-footer">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">view</a>
                </p>
            </div>
        </div>
    </div>

    @endforeach
</div>

{{ $posts->links() }}

@endsection