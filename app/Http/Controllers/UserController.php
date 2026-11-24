<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registerView()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registerUser(Request $request)
    {
        $request->validate([
          "user_name" => ["required", "min:5", "max:15"],
          "email" => ["required", "email", "unique:user,email"],
          "password" => ["required", "min:6", "confirmed"]
        ]);

        User::create([
          'user_name' => $request->user_name,
          'email' => $request->email,
          'password' => $request->password,
        ]);

        return redirect('/login')->with('success', 'Register successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
