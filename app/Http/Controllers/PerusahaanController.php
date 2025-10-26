<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function Home(){
        return view("home");
    }
    public function About(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // Contact::create($validated);

        return back()->with('success', 'Pesan Anda telah terkirim! Terima kasih telah menghubungi DaharGo.');
    }
}