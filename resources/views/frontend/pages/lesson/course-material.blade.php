@extends('Frontend.layouts.master')

@section('content')
    
    <!-- breadcrumbarea__section__start -->
    <div class="breadcrumbarea" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper">
                        <div class="breadcrumb__title">
                            <h2 class="heading">Course Materials</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li> Course Materials</li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="shape__icon__2">
            <img loading="lazy"  class=" shape__icon__img shape__icon__img__1" src="{{url('frontend')}}/img/herobanner/herobanner__1.png" alt="photo">
            <img loading="lazy"  class=" shape__icon__img shape__icon__img__2" src="{{url('frontend')}}/img/herobanner/herobanner__2.png" alt="photo">
            <img loading="lazy"  class=" shape__icon__img shape__icon__img__3" src="{{url('frontend')}}/img/herobanner/herobanner__3.png" alt="photo">
            <img loading="lazy"  class=" shape__icon__img shape__icon__img__4" src="{{url('frontend')}}/img/herobanner/herobanner__5.png" alt="photo">
        </div>

    </div>
    <!-- breadcrumbarea__section__end-->


    <!-- tution__section__start -->
    <div class="tution sp_bottom_100 sp_top_100">
        <div class="container-fluid full__width__padding">

            <div class="row">
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">

                    <div class="accordion content__cirriculum__wrap" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lesson #01
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson.html"><span>Course Intro</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>3.27</strong>
                                            <a href="lesson.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>5.00</strong>
                                            <a href="lesson-2.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <a href="lesson-course-materials.html"><span>Course Materials</span></a></h5>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5>  <a href="lesson-quiz.html"><span>Summer Quiz</span></a></h5>
                                        </div>
                                    </div>

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5><a href="lesson-assignment.html"><span>Assignment</span></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lesson #02
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson.html"><span>Course Intro</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>3.27</strong>
                                            <a href="lesson.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>5.00</strong>
                                            <a href="lesson-2.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>7.00</strong>
                                            <a href="lesson-3.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <a href="lesson-course-materials.html"><span>Course Materials</span></a></h5>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5>  <a href="lesson-quiz.html"><span>Summer Quiz</span></a></h5>
                                        </div>
                                    </div>

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5><a href="lesson-assignment.html"><span>Assignment</span></a></h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lesson #03
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson.html"><span>Course Intro</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>3.27</strong>
                                            <a href="lesson.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>5.00</strong>
                                            <a href="lesson-2.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>7.00</strong>
                                            <a href="lesson-3.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <a href="lesson-course-materials.html"><span>Course Materials</span></a></h5>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5>  <a href="lesson-quiz.html"><span>Summer Quiz</span></a></h5>
                                        </div>
                                    </div>

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5><a href="lesson-assignment.html"><span>Assignment</span></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Lesson #04
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson.html"><span>Course Intro</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>3.27</strong>
                                            <a href="lesson.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>5.00</strong>
                                            <a href="lesson-2.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>7.00</strong>
                                            <a href="lesson-3.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>

                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <a href="lesson-course-materials.html"><span>Course Materials</span></a></h5>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5>  <a href="lesson-quiz.html"><span>Summer Quiz</span></a></h5>
                                        </div>
                                    </div>

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5><a href="lesson-assignment.html"><span>Assignment</span></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                   Lesson #05
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson.html"><span>Course Intro</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>3.27</strong>
                                            <a href="lesson.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>
                                            
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>5.00</strong>
                                            <a href="lesson-2.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>
                                            
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-video-alt"></i>
                                            <h5> <a href="lesson-2.html"><span>Course Outline</span></a></h5>
                                        </div>
                                        <div class="scc__meta">
                                            <strong>7.00</strong>
                                            <a href="lesson-3.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>
                                            
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5> <a href="lesson-course-materials.html"><span>Course Materials</span></a></h5>
                                        </div>
                                    </div>
                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-audio"></i>
                                            <h5>  <a href="lesson-quiz.html"><span>Summer Quiz</span></a></h5>
                                        </div>
                                    </div>

                                    <div class="scc__wrap">
                                        <div class="scc__info">
                                            <i class="icofont-file-text"></i>
                                            <h5><a href="lesson-assignment.html"><span>Assignment</span></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                    <div class="lesson__meterials__wrap">
                        <div class="aboutarea__content__wraper__5">
                            <div class="section__title">
                                <!-- <div class="section__title__button">
                                    <div class="default__small__button">About us</div>
                                </div> -->
                                <div class="section__title__heading ">
                                    <h2>Projects you will made.</h2>
                                </div>
                            </div>
                            <div class="about__text__5">
                                <p>Meet my startup design agency Shape Rex Currently I am working at CodeNext as Product Designer. Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quaerat excepturi accusantium eum, dolorem ipsa deleniti dicta voluptates reiciendis tempore aliquid assumenda at labore, unde quibusdam! Tenetur hic enim odit.
                                    <br>
                                    <br>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. In illum facilis quaerat expedita. Inventore, commodi. Non molestias neque esse ipsam temporibus quia accusantium voluptas facilis enim blanditiis, doloribus, facere omnis.
                                </p>
                            </div>

                            <div class="aboutarea__5__small__icon__wraper">
                                <div class="aboutarea__5__small__icon">
                                    <img loading="lazy"  src="{{url('frontend')}}/img/about/about_15.png" alt="about">

                                </div>
                                <div class="aboutarea__small__heading">
                                    <span>10+ Years ExperienceIn</span> this game, Means Product Designing
                                </div>

                            </div>




                            <div class="aboutarea__para__5">
                                <p>I love to work in User Experience & User Interface designing. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quod, maxime dolor beatae repellendus blanditiis error molestias accusamus optio suscipit nostrum tempora consectetur, vel placeat pariatur aliquid nisi harum sed cupiditate repudiandae dolorum facere repellat fugit.

                                </p>
                            </div>

                            <div class="aboutarea__list__2">
                                <ul>
                                    <li>
                                        <i class="icofont-check"></i> eCommerce design, Creative.
                                    </li>

                                    <li>
                                        <i class="icofont-check"></i> Business, Corporate, Education.
                                    </li>

                                    </li>

                                    <li>
                                        <i class="icofont-check"></i> Business, Corporate, Education.
                                    </li>

                                    <li>
                                        <i class="icofont-check"></i> Non-Profit, It & Tech, Hosting.
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- tution__section__end -->

@endsection