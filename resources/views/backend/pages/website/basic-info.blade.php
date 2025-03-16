@extends('backend.layout.master')

@push('backendCss')
    <link href="{{asset('backend')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
          rel="stylesheet" type="text/css">

@endpush

@section('contents')



    {{--    Form Starts--}}

        @if($basicInfo)
            <form method="post" action="{{route('admin.basicinfo.update',$basicInfo->id)}}" enctype="multipart/form-data">
                @method('PUT')

        @else
            <form method="post" action="{{route('admin.basicinfo.store')}}" enctype="multipart/form-data">

        @endif

        @csrf
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Website Basic Information</h4>

                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="dark_logo" class="form-label">Black Logo</label>
                                        <input oninput="bLogoImgPrev.src=window.URL.createObjectURL(this.files[0])"
                                               class="form-control" type="file" name="dark_logo"
                                               id="dark_logo">
                                        @if($basicInfo && $basicInfo->dark_logo)
                                        <img id="bLogoImgPrev" class="mt-1" src="{{asset($basicInfo->dark_logo)}}"
                                             height="60px" width="200px" alt=""/>
                                        @endif
                                    </div>

                                    <!--fav icon-->
                                     <div class="mb-3">
                                        <label for="fav_icon" class="form-label">Fav Icon</label>
                                        <input oninput="favImgPrev.src=window.URL.createObjectURL(this.files[0])"
                                               class="form-control" type="file" name="fav_icon"
                                               id="fav_icon">
                                        @if($basicInfo && $basicInfo->fav_icon)
                                        <img id="favImgPrev" class="mt-1" src="{{asset($basicInfo->fav_icon)}}"
                                             height="60px" width="60px" alt=""/>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="site_name" class="form-label">Website Name</label>
                                        <input class="form-control" type="text" name="site_name"
                                               placeholder=""
                                               id="site_name" value="{{$basicInfo->site_name ?? ''}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="mail" class="form-label">Email</label>
                                        <input class="form-control" type="email" name="mail"
                                               placeholder="xyz@gmail.com"
                                               id="mail" value="{{$basicInfo->mail ?? ''}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone_1" class="form-label">Phone 1</label>
                                        <input class="form-control" name="phone_1" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="phone_1" value="{{$basicInfo->phone_1 ?? ''}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone_2" class="form-label">Phone 2 (optional)</label>
                                        <input class="form-control" name="phone_2" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="phone_2" value="{{$basicInfo->phone_2 ?? ''}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="fb_link" class="form-label">Facebook link</label>
                                        <input class="form-control" name="fb_link" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="fb_link" value="{{$basicInfo->fb_link ?? ''}}">
                                    </div>


                                    <div class="mb-3">
                                        <label for="insta_link" class="form-label">Instagram link</label>
                                        <input class="form-control" name="insta_link" type="text"
                                               placeholder=""
                                               id="insta_link" value="{{$basicInfo->insta_link ?? ''}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="p_link" class="form-label">Twitter Link</label>
                                        <input class="form-control" name="twitter_link" type="text"
                                               placeholder=""
                                               id="twitter_link" value="{{$basicInfo->twitter_link ?? ''}}">
                                    </div>


                                    <div class="mb-3">
                                        <label for="about_text" class="form-label">Short Description(footer)</label>
                                        <textarea id="about_text" name="about_text"
                                                  class="form-control">{{$basicInfo->about_text ?? ''}}

                                        </textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="light_logo" class="form-label">Light Logo</label>
                                        <input oninput="lLogoImgPrev.src=window.URL.createObjectURL(this.files[0])"
                                               class="form-control" type="file" name="light_logo"
                                               id="light_logo">
                                        @if($basicInfo && $basicInfo->light_logo)
                                        <img id="lLogoImgPrev" class="mt-1" src="{{asset($basicInfo->light_logo)}}"
                                             height="60px" width="200px" alt=""/>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="youtube_link" class="form-label">Youtube Link</label>
                                        <input class="form-control" name="youtube_link" type="text"
                                               placeholder=""
                                               id="youtube_link" value="{{$basicInfo->youtube_link ?? ''}}">
                                    </div>


                                    <div class="mb-3">
                                        <label for="vimeo_link" class="form-label">Vimeo Link</label>
                                        <input class="form-control" name="vimeo_link" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="vimeo_link" value="{{$basicInfo->vimeo_link ?? ''}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="linkedin_link" class="form-label">Linkedin Link</label>
                                        <input class="form-control" type="text" placeholder="Enter Store Phone Number"
                                               id="linkedin_link" name="linkedin_link"
                                               value="{{$basicInfo->linkedin_link ?? ''}}">
                                    </div>


                                    <div class="mb-3">
                                        <label for="skype_link" class="form-label">
                                            Skype Link</label>
                                        <input class="form-control" name="skype_link" type="text"
                                               placeholder=""
                                               id="skype_link" value="{{$basicInfo->skype_link ?? ''}}">
                                    </div>



                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea id="address" name="address"
                                                  class="form-control">{{$basicInfo->address ?? ''}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="opening_hours_text" class="form-label">Opening Hour Text</label>
                                        <textarea id="opening_hours_text" name="opening_hours_text"
                                                  class="form-control">{{$basicInfo->opening_hours_text ?? ''}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="copyright_text" class="form-label">Copyright Text</label>
                                        <textarea id="copyright_text" name="copyright_text"
                                                  class="form-control">{{$basicInfo->copyright_text ?? ''}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="map_iframe" class="form-label">Map Iframe</label>
                                        <textarea id="map_iframe" name="map_iframe"
                                                  class="form-control">{{$basicInfo->map_iframe ?? ''}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Meta Information</h4>

                    </div>


                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title"
                                               value="{{$basicInfo->meta_title ?? ''}}">
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <label for="meta_desc" class="form-label">Meta Description</label>
                                        <textarea id="meta_desc" name="meta_desc"
                                                  class="form-control">{{$basicInfo->meta_desc ?? ''}}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="meta_keyword" class="form-label">Meta Keywords</label>
                                        <textarea id="meta_keyword" class="form-control"
                                                  name="meta_keyword">{{$basicInfo->meta_keyword ?? ''}}</textarea>
                                    </div>



                                    <div class="mb-3">
                                        <label for="meta_image"  class="form-label"  >Meta Image</label>
                                        <input type="file" oninput="metaLogoImgPrev.src=window.URL.createObjectURL(this.files[0])" class="form-control" name="meta_image">

                                        @if($basicInfo && $basicInfo->meta_image)
                                        <img id="metaLogoImgPrev" class="mt-1" src="{{asset($basicInfo->meta_image)}}"
                                             height="60px" width="60px"/>
                                        @endif
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
