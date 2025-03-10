<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::get();
        return view('backend.country.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "country"=>"required"
        ]);

        Country::create([
            "name"=>$request->country,
        ]);

        $country = new Country(); // model instance creation
        $country->name = $request->country; // assigning vakue to object
        // if($request->checked == true){
        //     $country->alias = $request->alias;
        // }
        $country->save();

        session()->flash('message','Country Added');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $country = Country::where('id','=',$id)->first();
        return view('backend.country.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "country"=>"required",
            "status"=>"required"
        ]);
        $country = Country::where('id','=',$id)->first();
        $country->update([
            "name"=>$request->country,
            "status"=>$request->status
        ]);
        // $country->name = $request->country;
        // $country->status = $request->status;
        // $country->save();

        return redirect()->route('admin.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Country::where('id','=',$id)->delete();
        return redirect()->route('admin.countries.index');
    }
}
