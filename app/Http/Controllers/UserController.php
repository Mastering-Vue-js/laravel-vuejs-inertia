<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller {
    public function home() {
        $users = \App\Models\User::all();
        return Inertia::render('Home', ['users' => $users]);
    }

    public function about() {
        $about = ['title' => 'About Us', 'content' => 'This is the about page.'];
        return Inertia::render('About', ['about' => $about]);
    }

    public function contact() {
        return Inertia::render('Contact');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $data = [
            'name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ];

        $status = User::create($data);

        if($status) {
            return redirect()->intended('/contact')->with('message', 'User created.');
        }else {
            return Redirect::back()->with('message', 'User not created.');
        }
    }
}
