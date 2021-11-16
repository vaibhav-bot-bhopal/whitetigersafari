@extends('admin.layouts.admin')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.news-page-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.news-page-h1') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row pt-4 pb-4">
                <div class="col-lg-12 col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header d-flex">
                            <h3 class="card-title my-auto" style="font-size: 18px; font-weight: 600;">
                                {{ __('panel.news-list') }}
                                <span class="badge badge-info pt-1 pb-1 pl-2 pr-2 ml-1" data-toggle="tooltip" data-placement="top" title="{{ __('panel.news-tooltip') }}" style="font-size: 14px; font-weight: 500;">{{ $newses->count() }}</span>
                            </h3>
                            <a class="btn btn-sm btn-primary ml-auto" href="{{route('newses.create')}}"><i class="nav-icon fas fa-plus-circle" style="margin-right: 5px;"></i>{{ __('panel.news-btn-add') }}</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="tblNews" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('panel.news-tbl-sno') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-title') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-date') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-description') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-image') }}</th>
                                        <th class="text-center">{{ __('panel.news-tbl-action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newses as $key=>$news)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td class="w-25">{{$news->title}}</td>
                                            <td>{{ date('d-m-Y', strtotime($news->date)) }}</td>
                                            <td class="w-50 text-justify">{!! Str::limit($news->description, 300, '...') !!}</td>
                                            <td>
                                                <img src="{{asset('public/storage/news_image/'.$news->image)}}" width="150" height="100" class="img-responsive rounded" alt="image">
                                            </td>
                                            <td class="text-center w-25">
                                                <a href="{{ route('newses.edit', $news->id) }}" class="btn btn-sm btn-info"><i class="nav-icon fas fa-edit" style="margin-right: 5px;"></i>{{ __('panel.news-btn-edit') }}</a>

                                                <button type="button" class="btn btn-sm btn-danger" onclick="deletePost({{ $news->id }})"><i class="nav-icon fas fa-trash-alt" style="margin-right: 5px;"></i>{{ __('panel.news-btn-delete') }}</button>
                                                <form id="delete-form-{{ $news->id }}" action="{{ route('newses.destroy', $news->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('panel.news-modal-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __('panel.news-modal-body') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('panel.news-modal-btn-cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="delPost">{{ __('panel.news-modal-btn-yes') }}</button>
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
            $("#tblNews").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tblNews_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        // Delete Function
        function deletePost(id)
        {
            $("#delModal").modal('show');

            document.getElementById("delPost").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            });
        }

        //Initialize Tooltip
        $('[data-toggle=tooltip]').tooltip();
    </script>
@endpush
