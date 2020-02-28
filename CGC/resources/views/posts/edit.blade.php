@extends('template')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p class="lead">
        {{ $post->content }}
    </p>
    <hr />

    <!-- display the form, to submit a new answer -->
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <textarea class="form-control" name="title" rows="4" placeholder='{{$post->title}}'></textarea>
        {{-- <textarea class="form-control" name="content" type='hidden' rows="4" value='helpers'>content</textarea> --}}
        <input type="hidden" value="helpers" name="content" />
        <input type="hidden" value="{{ $post->id }}" name="post_id" />
        <div class="col-md-">
            <label for="publier" class="col-md-  ">publier</label>
            <input id="publier" type="checkbox" class=" " name="publier">
        </div>
        <button class="btn btn-primary">Modifier le post</button>
    </form>
</div>
</div>
@endsection