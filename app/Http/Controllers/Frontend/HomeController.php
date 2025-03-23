<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Achievement;
use App\Models\AdmissionDeadline;
use App\Models\AdmissionResponse;
use App\Models\AdmissionScholarshipResponse;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\Faq;
use App\Models\Herobanner;
use App\Models\HowApply;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\TestimonialSetting;
use App\Models\User;
use App\Models\WhyUs;
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
        
        $whyUs = WhyUs::where('status', 1)->limit(3)->get();
        $banner = Banner::first();
        $howApply = HowApply::first();


        return view('frontend.pages.home', compact(['heroBanner', 'randomCourse', 'courseClasses',
            'teachers', 'about', 'services', 'testimonials', 'testimonialSetting', 'blogs', 'featuredCourses',
        'achievements','whyUs','banner','howApply']));

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
        $applyContent = HowApply::first();
        return view('frontend.pages.admission.how-apply', compact('applyContent'));
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
        $faqs = Faq::where('status', 1)->get();
        return view('frontend.pages.info.faq', compact('faqs'));
    }


    public function scholarshipPage()
    {
        $blogs = Blog::where('status', 1)->limit(3)->get();
        return view('frontend.pages.admission.scholarship', compact('blogs'));
    }

    public function dateTimelinePage()
    {
        $dateDeadline = AdmissionDeadline::first();
        return view('frontend.pages.admission.dates-deadline', compact('dateDeadline'));
    }

    public function applyScholarship(Request $request)
    {
//        dd($request->all());
        
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email' => 'required|email|string',
            'phone' => 'required|string',
            'date_of_birth' => 'required|date',
            'address_1' => 'required|string',
            'address_2' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'nullable|string',
            'zip' => 'required|string',
            'country' => 'required|string',
            'hear_from' => 'nullable|string',
            'month_enter' => 'nullable|string',
            
        ]);
        

        $scholarshipApplyForm = new AdmissionScholarshipResponse();
        $scholarshipApplyForm->first_name=$request->first_name;
        $scholarshipApplyForm->last_name=$request->last_name;
        $scholarshipApplyForm->email=$request->email;
        $scholarshipApplyForm->phone=$request->phone;
        $scholarshipApplyForm->date_of_birth=$request->date_of_birth;
        $scholarshipApplyForm->address_1=$request->address_1;
        $scholarshipApplyForm->address_2=$request->address_2;
        $scholarshipApplyForm->city=$request->city;
        $scholarshipApplyForm->state=$request->state;
        $scholarshipApplyForm->zip=$request->zip;
        $scholarshipApplyForm->country=$request->country;
        $scholarshipApplyForm->hear_from=$request->hear_from;
        $scholarshipApplyForm->month_enter=$request->month_enter;
        $scholarshipApplyForm->save();
        return redirect()->back()->with('success', 'Application submitted successfully');
    }
}
