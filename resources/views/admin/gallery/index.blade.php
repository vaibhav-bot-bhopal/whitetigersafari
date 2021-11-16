@extends('admin.layouts.admin')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{asset('public/assets/plugins/ekko-lightbox/ekko-lightbox.css')}}">

    <style>
        /* :root {
            --minimum-width: 300px;
            --ratio: 16/9;
        }

        .card .card-body .image-box img {
            background-color: #ffffff;
            aspect-ratio: var(--ratio);
            object-fit: contain;
            width: 50%;
            height: 50%;
            margin: 0;
            padding: 0;
        } */
    </style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.gallery-page-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.gallery-page-h1') }}</li>
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
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1">
                    <!-- Gallery Section Start Here -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header d-flex">
                                    <h3 class="card-title my-auto" style="font-size: 18px; font-weight: 600;">
                                        {{ __('panel.gallery-h1') }}
                                        <span class="badge badge-info pt-1 pb-1 pl-2 pr-2 ml-1" data-toggle="tooltip" data-placement="top" title="Total Number of Images" style="font-size: 14px; font-weight: 500;">{{ $photos->count() }}</span>
                                    </h3>
                                    <a class="btn btn-sm btn-success ml-auto" href="{{route('images.create')}}"><i class="nav-icon fas fa-upload" style="margin-right: 5px;"></i>{{ __('panel.btn-upload') }}</a>
                                    <a class="btn btn-sm btn-primary mr-0 ml-1" href="{{route('images.show')}}"><i class="nav-icon fas fa-th-large" style="margin-right: 5px;"></i>{{ __('panel.btn-thumbnail') }}</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="tblGallery" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">{{ __('panel.gallery-sno') }}</th>
                                                <th class="text-center">{{ __('panel.gallery-image-name') }}</th>
                                                <th class="text-center">{{ __('panel.gallery-image') }}</th>
                                                <th class="text-center">{{ __('panel.gallery-size') }}</th>
                                                <th class="text-center">{{ __('panel.gallery-action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($photos as $key=>$photo)
                                                <tr>
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td class="text-center">{{ ucwords($photo->original_filename) }}</td>
                                                    <td class="text-center">
                                                        <div class="image-box">
                                                            <a href="{{asset('public/storage/gallery/'. $photo->filename)}}" data-toggle="lightbox" data-title="{{$photo->original_name}}" data-gallery="gallery">
                                                                <img class="img-responsive pad rounded" src="{{asset('public/storage/gallery/'. $photo->filename)}}" width="150" height="100" alt="Gallery Image">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-info">{{ HumanReadable::bytesToHuman($photo->file_size) }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteImage({{ $photo->id }})">{{ __('panel.btn-delete') }} <i class="fas fa-trash-alt pl-1"></i></button>
                                                        <form id="delete-form-{{ $photo->id }}" action="{{ route('images.destroy', $photo->id) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <div class="col-md-12">
                                                    <td colspan="5">
                                                        <h5 class="text-center" style="font-weight: 600;">{{ __('panel.gallery-h5') }}</h5>
                                                    </td>
                                                </div>
                                                <!-- /.col -->
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('panel.gallery-modal-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __('panel.gallery-modal-body') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('panel.gallery-modal-btn-cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="delImage">{{ __('panel.gallery-modal-btn-yes') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Modal -->
@endsection

@push('js')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#tblGallery").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tblGallery_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
    // Delete Function
    function deleteImage(id)
    {
        $("#delModal").modal('show');

        document.getElementById("delImage").addEventListener("click", function(){
            event.preventDefault();
            document.getElementById('delete-form-'+id).submit();
        });
    }
    </script>

    <!-- Ekko Lightbox -->
    <script src="{{asset('public/assets/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        })
    </script>
@endpush
