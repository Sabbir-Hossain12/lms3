@extends('frontend.layouts.master')

@push('css')
    <style>
        h1, h2, h3, h4, h5, h6 {
            font-weight: 500 !important;
        }
    </style>
@endpush
@section('contents')

    @include('frontend.includes.header')

    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>{{ $content->title ?? '' }}</h2>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $content->title ?? '' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-address-section padding-tb section-bg">
        <div class="container">
           {!! $content->long_desc ?? '' !!}
        </div>
    </div>

    @include('frontend.includes.footer')




@endsection
