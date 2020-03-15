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
                                <th>utilisateurs</th>
                                <th>status</th>
                                <th>Profile</th>
                                <th>Posts</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            @foreach ($user->roles as $role)


                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$role->name}}</td>
                                <td><a href="{{route('profile2',['id'=>$user->id,'user'=>$user->name,'role'=>$role->name])}}">
                                        profile</a> </td>
                                <td>{{$user->post()->count()}}</td>
                                <td style="paddingLeft:10 px;">
                                    <a href="{{ route('user.edit',$user->id) }}"><i class="fas fa-edit"></i>

                                    </a>
                                    <a href="{{ route('user.destroy',$user->id) }}" class=""> <i
                                            class="btn  fas fa-trash-alt"></i>

                                    </a>
                                </td>
                            </tr>
                            @endforeach
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