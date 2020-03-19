@extends('layouts.app')
@section('content')

<h2>Posts Recet</h2>
{{-- <div class="row container-fluid">
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
</div> --}}

{{-- {{ $posts->links() }} --}}

<body>
    <div class="container cont">
        <section id='first-section-above-header'></section>
        <section id='mask-first-section-above-header'>
            <section id='wrapper-registration-logo'>
                {{-- <img src=url(https://www.afrikhealth.com/fungry/img/fungry-logo.png)  width=152 height=52 class='logo' /> --}}
                <div class='registration-area'>
                    {{-- <span class='button' id='sign-in'>SIGN IN</span>
   <span class='button'>REGISTER</span> --}}
                    {{-- <img src='icons/panier.png' width=42 height=42 class='panier' /> --}}
                </div>
            </section>
            <p>Bienvenu sur notre Blog de Mangas</p><br />
        </section>
        <div class="row container-fluid">
            <article class="row">
                <span class="row col-md-12 slide ">
                    <img class="img-responsive" style="overflow:hidden;" src="images/1.jpg" />
                </span>
                {{-- @endsection --}}
                {{-- @section('post') --}}

                @foreach ($posts as $post)

                {{-- ici on inclura la vu des differents posts
        
        elle a ete renvoye pat PostController@index --}}
                @include('posts.posts')
                @endforeach
                {{-- @endsection --}}

            </article>
            {{ $posts->links() }}
        </div>
    </div>

    @endsection
    @include('posts.indexfooter')
</body>

</html>