@extends('admin.layouts.admin')

@section('title','Settings - Admin Profile')

@push('css')
    <style>
        .card-success.card-outline {
            border-top: 3px solid #0088cc;
        }
    </style>
@endpush

@section('content')

<!-- Content Wrapper. Contains page content -->
    @if (session('locale') == 'en')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin Profile Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
                        <!-- Profile Image -->
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                {{-- <div class="text-center">
                                    @if (Auth::user()->image)
                                        <img class="profile-user-img img-fluid img-circle"
                                        src="{{asset('public/storage/profile/'.Auth::user()->image)}}"
                                        alt="User profile picture">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle"
                                        src="{{asset('public/storage/profile/avatar.jpg')}}"
                                        alt="User profile picture">
                                    @endif
                                </div> --}}

                                <h3 class="profile-username text-center" style="font-weight: 600;">Welcome ! {{ Auth::user()->name }}</h3>

                                <form action="{{route('wts.admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="Enter Your Name">
                                        @if ($errors->any())
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('name')}}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail">Email Address</label>
                                        <input type="email" class="form-control {{($errors->any() && $errors->first('email')) ? 'is-invalid' : ''}}" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Enter Your Email">
                                        @if ($errors->any())
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('email')}}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-upload" style="margin-right: 5px;"></i>UPDATE</button>
                                        @if (Auth::user()->role_as == 'admin')
                                            <a href="{{route('admin.dashboard')}}" class="btn btn-danger"><i class="nav-icon fas fa-arrow-circle-left" style="margin-right: 5px;"></i>BACK</a>
                                        @endif
                                    </div>
                                </form>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (end) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    @endif

    @if (session('locale') == 'hi')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0">यूजर प्रोफाइल पेज</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">मुख्य पेज</a></li>
                            <li class="breadcrumb-item active">यूजर प्रोफाइल</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
                        <!-- Profile Image -->
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                {{-- <div class="text-center">
                                    @if (Auth::user()->image)
                                        <img class="profile-user-img img-fluid img-circle"
                                        src="{{asset('public/storage/profile/'.Auth::user()->image)}}"
                                        alt="User profile picture">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle"
                                        src="{{asset('public/storage/profile/avatar.jpg')}}"
                                        alt="User profile picture">
                                    @endif
                                </div> --}}

                                <h3 class="profile-username text-center" style="font-weight: 600;">Welcome ! {{ Auth::user()->name }}</h3>

                                <p class="text-muted text-center">{{ Auth::user()->profession }}</p>

                                <form action="{{ route('wts.admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="inputName">नाम</label>
                                        <input type="text" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="अपना नाम दर्ज करें">
                                        @if ($errors->any())
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('name')}}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail">ईमेल एड्रेस</label>
                                        <input type="email" class="form-control {{($errors->any() && $errors->first('email')) ? 'is-invalid' : ''}}" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="अपना ईमेल दर्ज करें">
                                        @if ($errors->any())
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('email')}}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-upload" style="margin-right: 5px;"></i>अपडेट करें</button>
                                        @if (Auth::user()->role_as == 'admin')
                                            <a href="{{route('admin.dashboard')}}" class="btn btn-danger"><i class="nav-icon fas fa-arrow-circle-left" style="margin-right: 5px;"></i>वापस</a>
                                        @endif
                                    </div>
                                </form>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (end) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    @endif

@endsection

@push('js')

@endpush
