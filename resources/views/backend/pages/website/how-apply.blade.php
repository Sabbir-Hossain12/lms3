@extends('backend.layout.master')

@push('backendCss')
    <link href="{{asset('backend')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
          rel="stylesheet" type="text/css">

@endpush

@section('contents')



    {{--    Form Starts--}}
    @if(isset($howApply))
        <form method="post" action="{{route('admin.how-apply.update',$howApply->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="post" action="{{route('admin.how-apply.store')}}" enctype="multipart/form-data">

                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Banner Information</h4>

                                </div>
                                <div class="card-body p-4">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="icon_1" class="form-label">Icon 1 (https://fontawesome.com/icons)</label>
                                                    <input class="form-control" type="text" name="icon_1" id="icon_1" value="{{ $howApply->icon_1 ?? '' }}">
                                                    <div id="iconPrevDiv" class="m-2">
                                                        <i class="text-danger fas {{ $howApply->icon_1 ?? '' }}"></i>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="title_1" class="form-label">Title 1</label>
                                                    <input class="form-control" type="text" name="title_1" placeholder=""
                                                           id="title_1" value="{{ $howApply->title_1 ?? '' }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description_1" class="form-label">Description 1</label>
                                                    <textarea class="form-control" name="description_1" id="description_1" >{{ $howApply->description_1 ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="icon_2" class="form-label">Icon 2 (https://fontawesome.com/icons)</label>
                                                    <input class="form-control" type="text" name="icon_2" id="icon_2" value="{{ $howApply->icon_2 ?? '' }}">
                                                    <div id="iconPrevDiv" class="m-2">
                                                        <i class="text-danger fas {{ $howApply->icon_2 ?? '' }}"></i>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="title_2" class="form-label">Title 2</label>
                                                    <input class="form-control" type="text" name="title_2" placeholder=""
                                                           id="title_2" value="{{ $howApply->title_2 ?? '' }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description_2" class="form-label">Description 2</label>
                                                    <textarea class="form-control" name="description_2" id="description_2" >{{ $howApply->description_2 ?? '' }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="form_file" class="form-label">Form File</label>
                                                    <input class="form-control" type="file" name="form_file" id="form_file">
                                                    @if(isset($howApply->form_file))
                                                        <a href="{{asset($howApply->form_file)}}" target="_blank">View File</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="icon_3" class="form-label">Icon 3 (https://fontawesome.com/icons)</label>
                                                    <input class="form-control" type="text" name="icon_3" id="icon_3" value="{{ $howApply->icon_3 ?? '' }}">
                                                    <div id="iconPrevDiv" class="m-2">
                                                        <i class="text-danger fas {{ $howApply->icon_3 ?? '' }}"></i>
                                                    </div>
                                                    
                                                </div>

                                                <div class="mb-3">
                                                    <label for="title_3" class="form-label">Title 3</label>
                                                    <input class="form-control" type="text" name="title_3" placeholder=""
                                                           id="title_3" value="{{ $howApply->title_3 ?? '' }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description_3" class="form-label">Description 3</label>
                                                    <textarea class="form-control" name="description_3" id="description_3" >{{ $howApply->description_2 ?? '' }}</textarea>
                                                </div>


                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="long_desc" class="form-label">Long Description (page)</label>
                                                    <textarea class="form-control" name="long_desc" id="long_desc" >{{ $howApply->long_desc ?? '' }}</textarea>
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
                    {{--  CkEditor CDN  --}}
                    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


                    <script>
                        $(document).ready(function () {

                            ClassicEditor
                                .create(document.querySelector('#long_desc'),{

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
