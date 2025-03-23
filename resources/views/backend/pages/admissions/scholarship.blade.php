@extends('backend.layout.master')

@push('backendCss')
    <link href="{{asset('backend')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
          rel="stylesheet" type="text/css">

@endpush

@section('contents')



    {{--    Form Starts--}}
    @if(isset($scholarship))
        <form method="post" action="{{ route('admin.scholarship.update',$scholarship->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="post" action="{{ route('admin.scholarship.store') }}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Scholarship Information (page)</h4>

                                </div>
                                <div class="card-body p-4">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="document" class="form-label">Document (pdf, doc, docx)</label>
                                                    <input class="form-control" type="file" name="document" id="document">
                                                    @if( $scholarship && $scholarship->document)
                                                        <div class="mt-2">
                                                        <a href="{{ asset($scholarship->document) }}" target="_blank">View Document</a>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input class="form-control" type="text" name="title"
                                                           placeholder=""
                                                           id="title" value="{{ $scholarship->title ?? '' }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea class="form-control" name="description" id="description" required>{{ $scholarship->description ?? '' }}</textarea>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-center mt-4 d-grid">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                </form>
        @endsection

        @push('backendJs')
                    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        $(document).ready(function () {

                            ClassicEditor
                                .create(document.querySelector('#description'),{

                                    ckfinder:
                                        {
                                            uploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
                                        }
                                }).then(newEditor => {
                                jReq = newEditor;
                            })
                                .catch(error => {
                                    console.error(error);
                                });
                        });
                    </script>
        @endpush
