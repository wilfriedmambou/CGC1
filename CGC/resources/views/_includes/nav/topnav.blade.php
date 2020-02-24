{{-- <nav class="navbar  navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Laravel Answers</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ route('questions.index') }}">Home</a></li>
<li><a href="#">Recent</a></li>
<li><a href="#">Popular</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <a href="#" class="btn btn-primary" style="margin-top:5px;">Ask A Question</a>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> --}}
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel Answer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#"><a href="{{ route('questions.index') }}">Home</a> <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><a href="{{ route('questions.index') }}">Profile</a></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#"><a href="{{ route('questions.index') }}">A propos</a></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><a href="{{ route('questions.index') }}">Produits</a></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><a href="{{ route('questions.index') }}">Travaux</a></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>