@extends('admin.layouts.admin')

@push('css')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.event-edit-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.event-edit-h1') }}</li>
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
                <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                    <div class="card card-primary card-outline">
                        <form action="{{ route('events.update', $events->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">{{ __('panel.event-title') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$events->title}}" placeholder="Enter Event Title">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info far fa-clipboard copy-button" data-clipboard-target="#title" data-toggle="tooltip" data-placement="top" title="Copy to clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
                                        </span>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="date">{{ __('panel.event-date') }}</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{$events->date}}">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="time">{{ __('panel.event-time') }}</label>
                                    <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ date('H:i', strtotime($events->time)) }}">
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="place">{{ __('panel.event-place') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" value="{{$events->place}}" placeholder="Enter Event Place">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info far fa-clipboard copy-button" data-clipboard-target="#place" data-toggle="tooltip" data-placement="top" title="Copy to clipboard" style="border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;"></button>
                                        </span>
                                        @error('place')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('panel.event-description') }}</label>
                                    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" rows="5" id="description" name="description">{{$events->description}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="h_image" value="{{$events->image}}">

                                <div class="form-group">
                                    <label>{{ __('panel.event-image') }}</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border @error('image') is-invalid @enderror" name="image">
                                        <label class="custom-file-label" for="customFile">{{ __('panel.event-image-file') }}</label>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fa fa-pencil-alt" style="margin-right: 5px;"></i>{{ __('panel.event-btn-update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('js')

@endpush
