@extends('backend.layout.master')

@push('backendCss')
    {{--    <meta name="csrf_token" content="{{ csrf_token() }}" />--}}

    <link href="{{asset('backend')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
          rel="stylesheet" type="text/css">
    <link href="{{asset('backend')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
          rel="stylesheet" type="text/css">

@endpush


@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Permissions</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Permissions</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    {{-- Table Starts--}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="d-flex justify-content-center align-items-center">
                        <h4 class="card-title">Permission List</h4>
{{--                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPermissionModal">--}}
{{--                            Add Permission--}}
{{--                        </button>--}}
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0  nowrap w-100 dataTable no-footer dtr-inline" id="permissionTable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Guard</th>
{{--                                <th>Status</th>--}}
{{--                                <th>Actions</th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

    {{--    Table Ends--}}

    {{--    Create Categories Modal--}}
    <div class="modal fade" id="createPermissionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="form" id="createPermission">
                        @csrf

                        <div class="mb-3">
                            <label for="Name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="Name" name="name">
                        </div>
                        


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--    Edit Categories Modal--}}
    <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="form2" id="editAdmin">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="eName" class="col-form-label">Name</label>
                            <input type="text" id="eName" class="form-control" name="name">
                        </div>
                       
                        <input id="id" type="number" hidden>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('backendJs')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('backend')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script>

        $(document).ready(function () {


            var token = $("input[name='_token']").val();

            //Show Data through Datatable 
            let permissionTable = $('#permissionTable').DataTable({
                order: [
                    [0, 'asc']
                ],
                processing: true,
                serverSide: true,
                {{--ajax: "{{url('/admin/data')}}",--}}
                ajax: "{{route('admin.permission.data')}}",
                // pageLength: 30,

                columns: [
                    {
                        data: 'id',


                    },
                    {
                        data: 'name',

                    },
                    {
                        data: 'guard_name',
                        render: function (data,type,row)
                        {
                            return '<span class="badge bg-primary p-1">'+ data +' </span>';
                        }

                    },
                    // {
                    //     data: 'status',
                    //     name: 'Status',
                    //     orderable: false,
                    //     searchable: false,
                    // },

                    // {
                    //     data: 'action',
                    //     name: 'Actions',
                    //     orderable: false,
                    //     searchable: false
                    // },

                ]
            });

            
            {{--// Create Admin--}}
            {{--$('#createPermission').submit(function (e) {--}}
            {{--    e.preventDefault();--}}
            
            {{--    let formData = new FormData(this);--}}
            
            {{--    $.ajax({--}}
            {{--        type: "POST",--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--        },--}}
            {{--        url: "{{ route('admin.permission.store') }}",--}}
            {{--        data: formData,--}}
            {{--        processData: false,  // Prevent jQuery from processing the data--}}
            {{--        contentType: false,  // Prevent jQuery from setting contentType--}}
            {{--        success: function (res) {--}}
            {{--            if (res.message === 'success') {--}}
            {{--                $('#createPermissionModal').modal('hide');--}}
            {{--                $('#createPermission')[0].reset();--}}
            {{--                permissionTable.ajax.reload()--}}
            {{--                swal.fire({--}}
            {{--                    title: "Success",--}}
            {{--                    text: "Admin Created !",--}}
            {{--                    icon: "success"--}}
            {{--                })--}}
            
            
            {{--            }--}}
            {{--        },--}}
            {{--        error: function (err) {--}}
            {{--            console.error('Error:', err);--}}
            {{--            swal.fire({--}}
            {{--                title: "Failed",--}}
            {{--                text: "Something Went Wrong !",--}}
            {{--                icon: "error"--}}
            {{--            })--}}
            {{--            // Optionally, handle error behavior like showing an error message--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
            
            {{--// Read Admin Data--}}
            {{--$(document).on('click', '.editButton', function () {--}}
            {{--    let id = $(this).data('id');--}}
            {{--    $('#id').val(id);--}}
            
            {{--    $.ajax(--}}
            {{--        {--}}
            {{--            type: "GET",--}}
            {{--            headers: {--}}
            {{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--            },--}}
            {{--            url: "{{ url('admin/permissions') }}/" + id + "/edit",--}}
            {{--            data: {--}}
            {{--                id: id--}}
            {{--            },--}}
            
            {{--            processData: false,  // Prevent jQuery from processing the data--}}
            {{--            contentType: false,  // Prevent jQuery from setting contentType--}}
            {{--            success: function (res) {--}}
            
            {{--               --}}
            {{--                $('#eName').val(res.data.name);--}}
            {{--               --}}
            
            
            {{--            },--}}
            {{--            error: function (err) {--}}
            {{--                console.log('failed')--}}
            {{--            }--}}
            {{--        }--}}
            {{--    )--}}
            {{--})--}}
            
            {{--// Edit Admin Data--}}
            {{--$('#editAdmin').submit(function (e) {--}}
            {{--    e.preventDefault();--}}
            {{--    let id = $('#id').val();--}}
            {{--    let formData = new FormData(this);--}}
            
            {{--    $.ajax({--}}
            {{--        type: "POST",--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--        },--}}
            {{--        url: "{{ url('admin/permissions') }}/" + id,--}}
            {{--        data: formData,--}}
            {{--        processData: false,  // Prevent jQuery from processing the data--}}
            {{--        contentType: false,  // Prevent jQuery from setting contentType--}}
            {{--        success: function (res) {--}}
            {{--            if (res.message === 'success') {--}}
            {{--                $('#editPermissionModal').modal('hide');--}}
            {{--                $('#editAdmin')[0].reset();--}}
            {{--                permissionTable.ajax.reload()--}}
            {{--                swal.fire({--}}
            {{--                    title: "Success",--}}
            {{--                    text: "Admin Edited !",--}}
            {{--                    icon: "success"--}}
            {{--                })--}}
            
            
            {{--            }--}}
            {{--        },--}}
            {{--        error: function (err) {--}}
            {{--            console.error('Error:', err);--}}
            {{--            swal.fire({--}}
            {{--                title: "Failed",--}}
            {{--                text: "Something Went Wrong !",--}}
            {{--                icon: "error"--}}
            {{--            })--}}
            {{--            // Optionally, handle error behavior like showing an error message--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
            
            
            {{--// Delete Admin--}}
            {{--$(document).on('click', '#deletePermissionBtn', function () {--}}
            {{--    let id = $(this).data('id');--}}
            
            {{--    swal.fire({--}}
            {{--        title: "Are you sure?",--}}
            {{--        text: "You won't be able to revert this !",--}}
            {{--        icon: "warning",--}}
            {{--        showCancelButton: true,--}}
            {{--        confirmButtonColor: "#d33",--}}
            {{--        cancelButtonColor: "#3085d6",--}}
            {{--        confirmButtonText: "Yes, delete it!"--}}
            {{--    })--}}
            {{--        .then((result) => {--}}
            {{--            if (result.isConfirmed) {--}}
            
            
            {{--                $.ajax({--}}
            {{--                    type: 'DELETE',--}}
            
            {{--                    url: "{{ url('admin/permissions') }}/" + id,--}}
            {{--                    data: {--}}
            {{--                        '_token': token--}}
            {{--                    },--}}
            {{--                    success: function (res) {--}}
            {{--                        Swal.fire({--}}
            {{--                            title: "Deleted!",--}}
            {{--                            text: "Admin has been deleted.",--}}
            {{--                            icon: "success"--}}
            {{--                        });--}}
            
            {{--                        permissionTable.ajax.reload();--}}
            {{--                    },--}}
            {{--                    error: function (err) {--}}
            {{--                        console.log('error')--}}
            {{--                    }--}}
            {{--                })--}}
            
            
            {{--            } else {--}}
            {{--                swal.fire('Your Data is Safe');--}}
            {{--            }--}}
            
            {{--        })--}}
            
            
            {{--})--}}
            
            {{--// Change Admin Status--}}
            {{--$(document).on('click', '#adminStatus', function () {--}}
            {{--    let id = $(this).data('id');--}}
            {{--    let status = $(this).data('status')--}}
            {{--   --}}
            {{--    $.ajax(--}}
            {{--        {--}}
            {{--            type: 'post',--}}
            {{--            url: "{{route('admin.status')}}",--}}
            {{--            data: {--}}
            {{--                '_token': token,--}}
            {{--                id: id,--}}
            {{--                status: status--}}
            
            {{--            },--}}
            {{--            success: function (res) {--}}
            {{--                permissionTable.ajax.reload();--}}
            
            {{--                if (res.status == 1) {--}}
            
            {{--                    swal.fire(--}}
            {{--                        {--}}
            {{--                            title: 'Status Changed to Active',--}}
            {{--                            icon: 'success'--}}
            {{--                        })--}}
            {{--                } else {--}}
            {{--                    swal.fire(--}}
            {{--                        {--}}
            {{--                            title: 'Status Changed to Inactive',--}}
            {{--                            icon: 'success'--}}
            {{--                        })--}}
            
            {{--                }--}}
            {{--            },--}}
            {{--            error: function (err) {--}}
            {{--                console.log(err)--}}
            {{--            }--}}
            {{--        }--}}
            {{--    )--}}
            {{--})--}}
        });
    </script>

@endpush