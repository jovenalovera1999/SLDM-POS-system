<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users', compact('users', $users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'profile_picture' => 'image',
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required',
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|same:confirm_password',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new User;
        $user->FirstName = $request->first_name;
        $user->MiddleName = $request->middle_name;
        $user->LastName = $request->last_name;
        $user->Address = $request->Address;
        $user->ContactNumber = $request->contact_number;
        $user->Email = $request->email;
        $user->Username = $request->username;
        $user->Password = Hash::make($request->password);
        $user->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function registerView() {
        return view('register');
    }
}
