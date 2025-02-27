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
        $testimonials = StudentTestiminial::get();
        return view ('backend.home_page.testimonials.index',compact('testimonials'));
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
        // StudentTestiminial::create([
        //     "image" => $image,
        //     "message" => $request->message
        // ]);
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
    public function edit($id)
    {
        $testimonial = StudentTestiminial::where("id","=",$id)->first();
        return view('backend.home_page.testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testimonial = StudentTestiminial::where('id','=',$id)->first();
        $image = $request->file("image")->store('images/gallery/testimonial','public');
        $imagepath = storage_path('app/public/'.$testimonial->image);
        if(file_exists($imagepath)){
            unlink($imagepath);
        }
    $testimonial->update([
            "image"=>$image,
            "message"=>$request->message
        ]);
        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        StudentTestiminial::where('id','=',$id)->delete();
        return redirect()->route('admin.testimonials.index');
    }
}
