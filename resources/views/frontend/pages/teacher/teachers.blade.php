@extends('frontend.layouts.master')

@section('contents')
    @include('frontend.includes.header')

    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>All Team Members</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    @forelse($teachers as $teacher)
                        <div class="col">
                            <div class="instructor-item">
                                <div class="instructor-inner">
                                    @if($teacher->profile_image)
                                        <div class="instructor-thumb">
                                            <img src="{{ asset($teacher->profile_image) }}" alt="instructor">
                                        </div>
                                    @endif
                                    <div class="instructor-content">
                                        <a href="#"><h4>{{ $teacher->name ?? '' }}</h4></a>
                                        <p>{{ $teacher->title ?? '' }}</p>
                                        <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                    </div>
                                </div>
                                <div class="instructor-footer">
                                    <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                        <li><i class="icofont-book-alt"></i> 08 courses</li>
                                        <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>

            </div>
        </div>
    </div>
    @include('frontend.includes.footer')

@endsection
