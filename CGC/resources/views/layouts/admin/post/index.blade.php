@extends('layouts.admin.admin')
@section('content')
<section class="content">
    @if (Auth::user()->isAdministrator())
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table Des Posts</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>utilisateurs</th>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Etat</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postsAdmin as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td> @if ($post->publier ==="on") <span class="badge-success badge">Publier</span> @else
                                    <span class="badge-warning badge">Brouillon</span> @endif
                                </td>
                                <td>
                                    <a href="{{ route('post.edit',$post->id) }}"><i class="fas fa-edit"></i>

                                    </a>
                                    <a href="{{ route('post.destroy',$post->id) }}" class=""> <i
                                            class="btn  fas fa-trash-alt"></i>

                                    </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                       
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    {{ $postsAdmin->links() }}
    {{-- utilisateur simple qui  n'est pas administrateur --}}
    @else
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table Des Posts</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                {{-- <th>utilisateurs</th> --}}
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Etat</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postuser as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                {{-- <td>{{$post->user->name}}</td> --}}
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td>@if ($post->publier ==="on") <span class="badge-success badge">Publier</span> @else
                                    <span class="badge-warning badge">Brouillon</span> @endif</td>
                                <td>
                                    <a href="{{ route('post.edit',$post->id) }}"><i class="fas fa-edit"></i>

                                    </a>
                                    <a href="{{ route('post.destroy',$post->id) }}" class=""> <i
                                            class="btn  fas fa-trash-alt"></i>

                                    </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                       
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    {{ $postuser->links() }}
    @endif

    <!-- /.row -->
</section>


@endsection