<?php

namespace App\Http\Controllers;

use App\Models\home_page\WhyBull;
use Illuminate\Http\Request;

class WhyBullController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $why = WhyBull::get();
        return view('backend.home_page.why_bull.index',compact('why'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_page.why_bull.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate ([
            "message" => "required"
        ]);

        $whybull = new WhyBull();
        $whybull->message=$request->message;
        $whybull->save();
        return redirect()->route('admin.whybull.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(WhyBull $whyBull)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $whybull = WhyBull::where("id","=",$id)->first();
        return view('backend.home_page.Why_bull.edit',compact('whybull'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->Validate([
            "message"=>"required"
        ]);
        
        $whybull = WhyBull::where('id','=',$id)->first();
        $whybull -> update([
            "message"=>$request->message
        ]);

        return redirect()->route('admin.whybull.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        WhyBull::where('id','=',$id)->delete();
        return redirect()->route('admin.whybull.index');
    }
}
