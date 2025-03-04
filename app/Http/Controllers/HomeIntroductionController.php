<?php

namespace App\Http\Controllers;

use App\Models\home_page\HomeIntroduction;
use Illuminate\Http\Request;

class HomeIntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $introductions = HomeIntroduction::get();
        return view('backend.home_page.introduction.index',compact('introductions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_page.introduction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate ([
            "image"=>"required|mimes:png,jpg,jpeg",
            "message"=>"required"
        ]);

        $image = $request->file("image")->store("images/gallery/homeintroduction","public");

        $homeintroduction = new HomeIntroduction();
        $homeintroduction->image=$image;
        $homeintroduction->message=$request->message;
        $homeintroduction->save();
        return redirect()->route('admin.homeintroduction.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeIntroduction $homeIntroduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $introduction = HomeIntroduction::where('id','=',$id)->first();
        return view('backend.home_page.introduction.edit',compact('introduction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "image"=>"required|mimes:png,jpg,jpeg",
            "message"=>"required"
        ]);

        $homeintroduction = HomeIntroduction::where('id','=',$id)->first();
        $image = $request->file("image")->store('images/gallery/homeintroduction','public');
        $imagepath = storage_path('app/public/'.$homeintroduction->image);
        if(file_exists($imagepath)){
            unlink($imagepath);
        }
    $homeintroduction->update([
            "image"=>$image,
            "message"=>$request->message
        ]);
        return redirect()->route('admin.homeintroduction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        HomeIntroduction::where('id','=',$id)->delete();
        return redirect()->route('admin.homeintroduction.index');
    }
}
