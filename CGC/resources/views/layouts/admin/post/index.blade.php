@extends('layouts.admin.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>utilisateurs</th>
                                <th>Contenu</th>
                                <th>Profile</th>
                                <th>Posts</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->user->name}}</td>
                                <td> </td>
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
                        <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

@endsection
