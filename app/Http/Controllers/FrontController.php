<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Country;
use App\Models\Introduction;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use App\Models\StudentAdmission;
use App\Models\home_page\ChairmanMessage;
use App\Models\home_page\Scrolling_Image;


class FrontController extends Controller
{
    public function index()
    {
        $scrolling = Scrolling_Image::get();
        $chairman = ChairmanMessage::get();
        return view("frontend.index",compact('scrolling','chairman'));
    }

    public function introduction()
    {
        $introduction = Introduction::latest()->first();
        return view("frontend.introduction",compact('introduction'));
    }


    public function management()
    {
        return view("frontend.management-team");
    }

    public function silentfeature()
    {
        return view("frontend.silent-feature");
    }

    public function vision_mission()
    {
        return view("frontend.vision-mission");
    }

    public function admissionformsubmit(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "course_id"=>"required",
             "studylevel"=>"required",
             "gender"=>"required",
             "country_id"=>"required",
             "email"=>"required",
             "birthdate"=>"required",
             "age"=>"nullable",
             "address"=>"required",
             "number"=>"required",
             "father_name"=>"required",
             "father_number"=>"required",
             "father_occupation"=>"nullable",
             "father_mail"=>"nullable",
             "mother_name"=>"required",
             "mother_number"=>"required",
             "mother_occupation"=>"nullable",
             "mother_mail"=>"nullable",
             "local_name"=>"required",
             "local_number"=>"required",
             "local_occupation"=>"nullable",
             "local_mail"=>"nullable",
             "school_name"=>"required",
             "school_address"=>"required",
             "students_gpa"=>"required"
        ]);

        StudentAdmission::create([
            "name"=>$request->name,
            "course_id"=>$request->course_id,
             "studylevel"=>$request->studylevel,
             "gender"=>$request->gender,
             "country_id"=>$request->country_id,
             "email"=>$request->email,
             "birthdate"=>$request->birthdate,
             "age"=>$request->age,
             "address"=>$request->address,
             "number"=>$request->number,
             "father_name"=>$request->father_name,
             "father_number"=>$request->father_number,
             "father_occupation"=>$request->father_occupation,
             "father_mail"=>$request->father_mail,
             "mother_name"=>$request->mother_name,
             "mother_number"=>$request->mother_number,
             "mother_occupation"=>$request->mother_occupation,
             "mother_mail"=>$request->mother_mail,
             "local_name"=>$request->local_name,
             "local_number"=>$request->local_number,
             "local_occupation"=>$request->local_occupation,
             "local_mail"=>$request->local_mail,
             "school_name"=>$request->school_name,
             "school_address"=>$request->school_address,
             "students_gpa"=>$request->students_gpa
        ]);

        session()->flash("message","Form Submitted");
        return back();
    }

    public function admissionform()
    {
        $courses = Course::where('status', '=', 'active')->get();
        $countries = Country::where('status', '=', 'active')->get();
        return view("frontend.admission-form", compact('courses', 'countries'));
    }

    public function dict()
    {
        return view("frontend.faculty-details");
    }

    public function webdevelopment()
    {
        return view("frontend.faculty-details");
    }

    public function newsnotice()
    {
        return view("frontend.news-notice");
    }

    public function program()
    {
        return view("frontend.program");
    }

    public function photo()
    {
        $images = PhotoGallery::get();
        return view("frontend.photo-gallary",compact('images'));
    }

    public function video()
    {
        return view("frontend.video-gallary");
    }

    public function vaccancy()
    {
        return view("frontend.vaccancy");
    }

    public function contactus()
    {
        return view("frontend.contact-us");
    }

}
