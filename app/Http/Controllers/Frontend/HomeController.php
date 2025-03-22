<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Achievement;
use App\Models\AdmissionResponse;
use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\Herobanner;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\TestimonialSetting;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {

        $heroBanner = Herobanner::first();
        $services = CourseClass::where('status', 1)->where('is_featured', 1)->orderBy('position', 'asc')->get();
        $about = About::first();
        $testimonials = Testimonial::where('status', 1)->limit(2)->get();
        $testimonialSetting = TestimonialSetting::first();
        $featuredCourses = Course::with('class', 'teacher')->where('status', 1)
            ->where('is_featured', 1)->limit(6)->get();

        $teachers = User::role('teacher')->where('status', 1)->limit(4)->get();
        $blogs = Blog::where('status', 1)->limit(3)->get();
        $randomCourse = Course::where('status', 1)->inRandomOrder()->limit(6)->get();
        $courseClasses = CourseClass::where('status', 1)->where('is_featured', 1)->orderBy('position', 'asc')->limit(6)->get();

        $achievements = Achievement::where('status', 1)->limit(4)->get();


        return view('frontend.pages.home', compact(['heroBanner', 'randomCourse', 'courseClasses',
            'teachers', 'about', 'services', 'testimonials', 'testimonialSetting', 'blogs', 'featuredCourses',
        'achievements']));

    }

    public function page(string $slug)
    {
       $content= Page::where('slug', 'like' , '%'.$slug.'%')->orWhere('slug', $slug)->first();

       if ($content->slug == $slug) {
           return view('frontend.pages.info.page',compact('content'));
       }

    }


    public function aiAssistant()
    {
        return view('Frontend.ai-assistant.index');
    }

  

    public function aboutPage()
    {
        $about = About::first();

        $testimonials = Testimonial::where('status', 1)->limit(2)->get();
        $testimonialSetting = TestimonialSetting::first();
        $teachers = User::role('teacher')->where('status', 1)->limit(4)->get();
        $achievements = Achievement::where('status', 1)->limit(4)->get();
        $blogs = Blog::where('status', 1)->limit(3)->get();

        return view('frontend.pages.info.about-us',
            compact(['about', 'testimonials', 'testimonialSetting', 'teachers', 'achievements'
            ,'blogs']));
    }
    public function howToApplyPage()
    {
        return view('frontend.pages.admission.how-apply');
    }


    public function applyNow(Request $request)
    {
//      dd($request->all());
        $request->validate([
           'first_name' => 'required|string',
           'last_name' => 'nullable|string',
            'email' => 'required|email|string',
            'phone' => 'required|string',
            'why_chose' => 'nullable|string',
            'why_interested' => 'nullable|string',
            'documents' => 'nullable|mimes:jpg,jpeg,pdf,doc|max:2048',
        ]);

        $applyForm = new AdmissionResponse();
        $applyForm->first_name=$request->first_name;
        $applyForm->last_name=$request->last_name;
        $applyForm->email=$request->email;
        $applyForm->phone=$request->phone;
        $applyForm->highest_education= $request->highest_education;
        $applyForm->why_chose=$request->why_chose;
        $applyForm->why_interested=$request->why_interested;

        if ($request->hasFile('documents')) {
            $file = $request->file('documents');
            $filename = time() .uniqid(). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/admission/'), $filename);
            $applyForm->documents ='backend/upload/admission/'. $filename;
        }

        $applyForm->save();


        return redirect()->back()->with('success', 'Application submitted successfully');
    }

    public function faqPage()
    {
        return view('frontend.pages.info.faq');
    }


    public function scholarshipPage()
    {
        $blogs = Blog::where('status', 1)->limit(3)->get();
        return view('frontend.pages.admission.scholarship', compact('blogs'));
    }

    public function dateTimelinePage()
    {
        return view('frontend.pages.admission.dates-deadline');
    }
}
