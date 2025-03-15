@extends('backend.layout.master')

@push('backendCss')
    <link href="{{asset('backend')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
          rel="stylesheet" type="text/css">

@endpush

@section('contents')

    {{--    <div class="row">--}}
    {{--        <div class="col-12">--}}
    {{--            <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
    {{--                <h4 class="mb-sm-0 font-size-18">Basic Info</h4>--}}

    {{--                <div class="page-title-right">--}}
    {{--                    <ol class="breadcrumb m-0">--}}
    {{--                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>--}}
    {{--                        <li class="breadcrumb-item active">Basic-info</li>--}}
    {{--                    </ol>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    Form Starts--}}

    @if(isset($testSettings))
        <form method="post" action="{{route('admin.testimonial-settings.update',$testSettings->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="post" action="{{route('admin.testimonial-settings.store')}}" enctype="multipart/form-data">

                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">About Section</h4>

                                </div>
                                <div class="card-body p-4">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="side_img" class="form-label">Side Image (650 X 450)</label>
                                                    <input oninput="sideImgPrev.src=window.URL.createObjectURL(this.files[0])"
                                                           class="form-control" type="file" name="side_img"
                                                           id="side_img">
                                                    @if( $testSettings && $testSettings->side_img)
                                                        <img id="sideImgPrev" class="mt-1" src="{{asset($testSettings->side_img)}}"
                                                             height="100px" width="100px" alt=""/>
                                                    @endif
                                                </div>

                                                <div class="mb-3">
                                                    <label for="short_title" class="form-label">Short Title</label>
                                                    <input class="form-control" type="text" name="short_title"
                                                           placeholder=""
                                                           id="short_title" value="{{$testSettings->short_title ?? ''}}">
                                                </div>




                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">

                                                <div class="mb-3">
                                                    <label for="main_title" class="form-label">Main Title</label>
                                                    <input class="form-control" name="main_title" type="text"
                                                           placeholder=""
                                                           id="main_title" value="{{$testSettings->main_title ?? ''}}">
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


        @endpush
