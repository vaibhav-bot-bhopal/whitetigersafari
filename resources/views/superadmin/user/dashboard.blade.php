@extends('superadmin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('superadmin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Admin List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content-header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <h5 class="card-header">Admin List</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-center">Active/Deactive</th>
                                        <th>Created_At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @php
                                    $id = 1;
                                @endphp
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role_as}}</td>
                                        <td class="text-center">
                                            <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-size="small" data-toggle="toggle" data-style="slow" data-on="Active" data-off="Deactive" {{ $user->status ? '' : 'checked' }}>
                                        </td>
                                        <!-- <td class="text-center">
                                            @if($user->status == '0')
                                                <span class="badge badge-success">Active</span>
                                            @elseif($user->status == '1')
                                                <span class="badge badge-danger">Deactive</span>
                                            @endif
                                        </td> -->
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            <a href="{{ route('editUserRole', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('suadmin.changeadminpassword', $user->id) }}" class="btn btn-sm btn-warning">Change Password</a>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteUser({{ $user->id }})">Delete</button>
                                            <form id="delete-form-{{ $user->id }}" action="{{ route('deleteUserRole', $user->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $id++;
                                    @endphp
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure, you want to delete this user account ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-danger" id="del-user">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Delete Function -->
    <script>
    function deleteUser(id)
    {
        $("#delModal").modal('show');

        document.getElementById("del-user").addEventListener("click", function(){
            event.preventDefault();
            document.getElementById('delete-form-'+id).submit();
        });
    }
    </script>
@endpush
