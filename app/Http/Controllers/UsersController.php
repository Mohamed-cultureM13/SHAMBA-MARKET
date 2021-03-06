<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::find($id);
         return view('admin.users.edit')->with('user', $user);
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
        $user = User::find($id);
        if($user->role_as == 'admin'){
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();
        }
        else{
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->role_as = $request->input('roles');
            $user->save();
        }

        return redirect('/users')->with('status', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('status', 'User deleted');
    }

    public function vendorProfile($id)
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('vendor.profile')->with('user', $user);
    }

    public function adminProfile($id)
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('admin.profile')->with('user', $user);
    }

    public function admin_update_profile(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        return redirect('/admin-profile')->with('status', 'Profile updated');
    }

}
