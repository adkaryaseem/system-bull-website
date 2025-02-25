<?php

namespace App\Http\Controllers;

use App\Models\home_page\StudentTestiminial;
use Illuminate\Http\Request;

class StudentTestiminialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = StudentTestiminial::get();
        return view ('backend.home_page.testimonials.index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_page.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image"=>"required|mimes:png,jpg,jpeg",
            "message"=>"required"
        ]);

        $image = $request->file("image")->store("images/gallery/testimonial","public");
        $studenttestimonials = new StudentTestiminial();
        $studenttestimonials->image=$image;
        $studenttestimonials->message=$request->message;
        $studenttestimonials->save();
        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentTestiminial $studentTestiminial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentTestiminial $studentTestiminial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentTestiminial $studentTestiminial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentTestiminial $studentTestiminial)
    {
        //
    }
}
