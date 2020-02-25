@extends('template');
@section('content')
<p> Accueil</p>
@foreach ($posts as $post)
{{$post->title}}
{{-- {{$post->content}}/ --}}
@endforeach
@endsection