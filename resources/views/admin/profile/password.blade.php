@extends('admin.layouts.admin')

@section('title','Settings - Change Password')

@push('css')
    <style>
        .card-success.card-outline {
            border-top: 3px solid #0088cc;
        }
    </style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">{{ __('panel.pwd-admin-h1') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('panel.pwd-admin-h1') }}</li>
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

                            <h3 class="profile-username text-center" style="font-weight: 600;">{{ __('panel.pwd-msg') }} {{ Auth::user()->name }}</h3>

                            {{-- <p class="text-muted text-center">{{ Auth::user()->profession }}</p> --}}

                            <form action="{{ route('wts.admin.updatePassword') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="old_passwprd">{{ __('panel.pwd-current') }}</label>
                                    <input type="password" class="form-control {{($errors->any() && $errors->first('old_password')) ? 'is-invalid' : ''}}" id="old_password" name="old_password" placeholder="Enter Your Old Password">
                                    @if ($errors->any())
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('old_password')}}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('panel.pwd-new') }}</label>
                                    <input type="password" class="form-control {{($errors->any() && $errors->first('password')) ? 'is-invalid' : ''}}" id="password" name="password" placeholder="Enter Your New Password">
                                    @if ($errors->any())
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">{{ __('panel.pwd-confirm') }}</label>
                                    <input type="password" class="form-control {{($errors->any() && $errors->first('confirm_password')) ? 'is-invalid' : ''}}" id="password_confirmation" name="password_confirmation" placeholder="Enter Your Confirm Password">
                                    @if ($errors->any())
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('password_confirmation')}}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-upload" style="margin-right: 5px;"></i>{{ __('panel.pwd-btn-update') }}</button>
                                    @if (Auth::user()->role_as == 'admin')
                                        <a href="{{route('admin.dashboard')}}" class="btn btn-danger"><i class="nav-icon fas fa-arrow-circle-left" style="margin-right: 5px;"></i>{{ __('panel.pwd-btn-back') }}</a>
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
@endsection

@push('js')

@endpush
