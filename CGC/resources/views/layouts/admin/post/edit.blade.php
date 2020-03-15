@extends('layouts.admin.admin')

@section('content')
{{-- <div class="container">
    <h1>{{ $post->title }}</h1>
<p class="lead">
    {{ $post->content }}
</p>
<hr />

<!-- display the form, to submit a new answer -->
<form action="{{ route('post.update',$post->id) }}" method="POST">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <textarea class="form-control" name="title" rows="4" placeholder='{{$post->title}}'></textarea>
    {{-- <textarea class="form-control" name="content" type='hidden' rows="4" value='helpers'>content</textarea> --}}
    {{-- <input type="texte" value="{{$post->content}}" name="content" />
    <input type="hidden" value="{{ $post->id }}" name="post_id" />
    <div class="col-md-">
        <label for="publier" class="col-md-  ">publier</label>
        <input id="publier" value="{{$post->publier}}" type="checkbox" class=" " name="publier">
    </div>
    <button class="btn btn-primary">Modifier le post</button>
</form> --}}
{{-- </div> --}}
<div class="row">
    <div class="col-md-12 col-offset-3">
        <form action="{{ route('post.update',$post->id) }}" method="POST">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            @include('_includes/editor')
        </form>

    </div>
</div>
@endsection