@extends('admin.layouts.admin')

@push('css')
    <style>
        .error{
            color:red;
        }
    </style>
@endpush

@section('content')
<!-- Content Header (Page header) -->

    @if (session('locale') == 'en')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Event</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Event</li>
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

                        <form action="{{ url('admin/event-update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Event Title</label>
                                <input type="text" class="form-control mb-2" id="title" name="title" value="{{$data->title}}">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="edate">Event Date</label>
                                <input type="date" class="form-control mb-2" id="edate" name="edate" value="{{$data->date}}">
                                @error('edate')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="etime">Event Time</label>
                                <input type="time" class="form-control mb-2" id="etime" name="etime" value="{{$data->time}}">
                                @error('etime')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="place">Event Place</label>
                                <input type="text" class="form-control mb-2" id="place" name="place" value="{{$data->place}}">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="e_disc">Event Description</label>
                                <textarea class="ckeditor form-control mb-2" rows="5" id="e_disc" name="e_disc">{{$data->discription}}</textarea>
                                @error('e_disc')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <input type="hidden" name="h_file" value="{{$data->image}}">
                            <div class="form-group">
                                <input type="file" class="form-control-file border" name="image">
                                @error('image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        </form>

                    </div>
                </div>
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
                        <h1 class="m-0">कार्यक्रम संपादित करें</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">होम</a></li>
                            <li class="breadcrumb-item active">कार्यक्रम संपादित करें</li>
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

                        <form action="{{ url('admin/event-update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">इवेंट शीर्षक</label>
                                <input type="text" class="form-control mb-2" id="title" name="title" value="{{$data->title}}">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="edate">इवेंट तारीख</label>
                                <input type="date" class="form-control mb-2" id="edate" name="edate" value="{{$data->date}}">
                                @error('edate')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="etime">इवेंट समय</label>
                                <input type="time" class="form-control mb-2" id="etime" name="etime" value="{{$data->time}}">
                                @error('etime')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="place">इवेंट स्थान</label>
                                <input type="text" class="form-control mb-2" id="place" name="place" value="{{$data->place}}">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="e_disc">इवेंट विवरण</label>
                                <textarea class="ckeditor form-control mb-2" rows="5" id="e_disc" name="e_disc">{{$data->discription}}</textarea>
                                @error('e_disc')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <input type="hidden" name="h_file" value="{{$data->image}}">
                            <div class="form-group">
                                <input type="file" class="form-control-file border" name="image">
                                @error('image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mb-4">सबमिट</button>
                        </form>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

    @endif

<!-- /.content-header -->
@endsection
