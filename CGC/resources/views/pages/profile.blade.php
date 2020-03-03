@extends('layouts.admin.admin')
<div class="container-fluid">
    @section('content')
    <div class="row">
        @foreach ($posts as $post)

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$post->title}} </font>
                        </font>
                    </span>
                    <span class="info-box-number">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$post->content}}</font>
                        </font>
                    </span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        <font style="vertical-align: inherit;">
                            @if ($post->publier =='on')
                            <span class="badge badge-success">Publier</span>
                            @else
                            <span class="badge badge-warning">Brouillon</span>
                            @endif


                        </font>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        @endforeach
    </div>
</div>
@endsection