<?php

namespace App\Http\Controllers;

use App\Models\home_page\ChairmanMessage;
use Illuminate\Http\Request;

class ChairmanMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = ChairmanMessage::get();
        return view('backend.home_page.chairman_message.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_page.chairman_message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "message" => "required",
            "image" => "required|mimes:png,jpg,jpeg"
        ]);

        $image = $request->file("image")->store("images/gallery/chairmanmessage","public");
        ChairmanMessage::create([
            "message" => $request->message,
            "image" => $image
        ]);
        session()->flash('message', 'Chairman Message added Succesfully');
        return redirect()->route("admin.chairmanmessage.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(ChairmanMessage $chairmanMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chairman = ChairmanMessage::where('id','=',$id)->first();
        return view('backend.home_page.chairman_message.edit', compact('chairman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $chairman = ChairmanMessage::where("id", "=", $id)->first();
        $image = $request->file("image")->store('images/gallery/chairmanmessage','public');
        $imagepath = storage_path('app/public/'.$chairman->image);
        if(file_exists($imagepath)){
            unlink($imagepath);
        }
    $chairman->update([
            "image"=>$image
        ]);
        return redirect()->route('admin.chairmanmessage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        ChairmanMessage::where("id","=",$id)->delete();
        return redirect()->route('admin.chairmanmessage.index');
    }
}
