<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Registration::all();
        return view('registration.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'pnumber' => 'required',
        ]);

        $user = new Registration();
        $user->email = $request->input('email');
        $user->first_name = $request->input('fname');
        $user->last_name = $request->input('lname');
        $user->phone_number = $request->input('pnumber');
        $user->save();

        return redirect('/user')->with('success', 'Registered Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Registration::find($id);
        return view('registration.show')->with('users', $users);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Registration::find($id);

        return view('registration.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'pnumber' => 'required',
        ]);

        $user = Registration::find($id);
        $user->email = $request->input('email');
        $user->first_name = $request->input('fname');
        $user->last_name = $request->input('lname');
        $user->phone_number = $request->input('pnumber');
        $user->save();

        return redirect('/user')->with('success', 'Registered Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Registration::find($id);
        $user->delete();
        return redirect('/user');

    }
}
