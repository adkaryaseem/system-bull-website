<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newslettersubscribe(Request $request){
        $request->ajax();
        $request->validate([
            "email" => ["required","email"] , // "required|email"
        ]);
        $this->store($request);
        return response()->json([
            "message" => "Subscribed successful"
        ]);
    }

    private function store($data){
        Newsletter::create([
            "email" => $data->email,
        ]);
    }
}
