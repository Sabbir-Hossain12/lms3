@extends('Frontend.layouts.master')

@section('content')


    <!-- breadcrumbarea__section__start -->
    <div class="breadcrumbarea" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper">
                        <div class="breadcrumb__title">
                            <h2 class="heading">Lesson</h2>
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
                    <div class="lesson__quiz__wrap">


                        <div class="quiz__single__attemp">
                            <ul>
                                <li>Question : 1/3 | </li>
                                <li> Attempts allowed : 1</li>
                                <li> | Time: 5.0 Min</li>
                            </ul>
                            <hr class="hr" />
                            <h3>1. What is your favourite song?</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Example song 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Example song 2
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Example song 3
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Example song 4
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <br><br><br>

                        <div class="quiz__single__attemp">
                            <ul>
                                <li>Question : 2/3 | </li>
                                <li> Attempts allowed : 1</li>
                                <li> | Time: 4.0 Min</li>
                            </ul>
                            <hr class="hr" />
                            <h3>1. What is your best Friend Name?</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Example Name 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Example Name 2
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Example Name 3
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Example Name 4
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <br><br><br>

                        <div class="quiz__single__attemp">
                            <ul>
                                <li>Question : 3/3 | </li>
                                <li> Attempts allowed : 1</li>
                                <li> | Time: 6.0 Min</li>
                            </ul>
                            <hr class="hr" />
                            <h3>1. What is your best Mentor Name?</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Example Name 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Example Name 2
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Example Name 3
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Example Name 4
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br><br>

                        <a class="default__button" href="#"> Quiz Submit
                            <i class="icofont-long-arrow-right"></i>
                        </a>


                        <br><br><br>

                        <div class="dashboard__table table-responsive">
                            <h3>Quiz Result</h3>
                            <table>
                                <thead>
                                <tr>
                                    <th>Quiz</th>
                                    <th>Qus</th>
                                    <th>TM</th>
                                    <th>CA</th>
                                    <th>Result</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>
                                        <p>December 26, 2024</p>
                                        <span>Write a on yourself using the 5</span>
                                        <p>Student: <a href="#">John Due</a></p>
                                    </th>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <p>8</p>
                                    </td>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <span class="dashboard__td">Pass</span>
                                    </td>
                                    <td>
                                        <div class="dashboard__button__group">
                                            <a class="dashboard__small__btn__2" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                            <a class="dashboard__small__btn__2 dashboard__small__btn__3" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="dashboard__table__row">
                                    <th>
                                        <p>December 26, 2024</p>
                                        <span>Write a on yourself using the 5</span>
                                        <p>Student: <a href="#">John Due</a></p>
                                    </th>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <p>8</p>
                                    </td>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <span class="dashboard__td">Pass</span>
                                    </td>
                                    <td>
                                        <div class="dashboard__button__group">
                                            <a class="dashboard__small__btn__2" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                            <a class="dashboard__small__btn__2  dashboard__small__btn__3" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <p>December 26, 2024</p>
                                        <span>Write a on yourself using the 5</span>
                                        <p>Student: <a href="#">John Due</a></p>
                                    </th>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <p>8</p>
                                    </td>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <span class="dashboard__td">Pass</span>
                                    </td>
                                    <td>
                                        <div class="dashboard__button__group">
                                            <a class="dashboard__small__btn__2" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                            <a class="dashboard__small__btn__2  dashboard__small__btn__3" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="dashboard__table__row">
                                    <th>
                                        <p>December 26, 2024</p>
                                        <span>Write a on yourself using the 5</span>
                                        <p>Student: <a href="#">John Due</a></p>
                                    </th>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <p>8</p>
                                    </td>
                                    <td>
                                        <p>4</p>
                                    </td>
                                    <td>
                                        <span class="dashboard__td">Pass</span>
                                    </td>
                                    <td>
                                        <div class="dashboard__button__group">
                                            <a class="dashboard__small__btn__2" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                            <a class="dashboard__small__btn__2  dashboard__small__btn__3" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- tution__section__end -->

@endsection