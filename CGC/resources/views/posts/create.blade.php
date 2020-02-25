@extends('template')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Créer un Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('posts.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Titre</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">content</label>
                            <div class="col-md-6">
                                <input id="content" type="text" class="form-control" name="content" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection