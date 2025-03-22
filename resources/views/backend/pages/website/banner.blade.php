@extends('backend.layout.master')

@push('backendCss')
    <link href="{{asset('backend')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
          rel="stylesheet" type="text/css">

@endpush

@section('contents')



    {{--    Form Starts--}}
    @if(isset($banners))
        <form method="post" action="{{route('admin.banner.update',$banners->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="post" action="{{route('admin.banner.store')}}" enctype="multipart/form-data">

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
                                                    <label for="image" class="form-label">Image (450 X 600)</label>
                                                    <input oninput="imgPrev.src=window.URL.createObjectURL(this.files[0])"
                                                           class="form-control" type="file" name="image"
                                                           id="image">
                                                    @if( $banners && $banners->image)
                                                        <img id="imgPrev" class="mt-1" src="{{asset($banners->image)}}"
                                                             height="100px" width="100px" alt=""/>
                                                    @endif
                                                </div>

                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input class="form-control" type="text" name="title"
                                                           placeholder=""
                                                           id="title" value="{{ $banners->title ?? '' }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Short Desc</label>
                                                    <textarea class="form-control" name="description" id="description" >{{ $banners->description ?? '' }}</textarea>
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
