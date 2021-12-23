<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash ;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.users.changepassword');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:6|max:100',
            'new_password' => 'required|min:6|max:100',
            'password_confirmation' => 'required|same:new_password'
             
        ]);


        // Post::where('slug' , $slug)->update([
        //     'title'=> $request->input('title'),
        //     'description'=> $request->input('description'),
        //     'slug' => $slug ,
        //     'image_path' => $newImageName ,
        //     'user_id' => auth()->user()->id
        // ]) ;
        $current_user=auth()->user();
            // dd($current_user);
        if(Hash::check($request->current_password ,$current_user->password))
        {
            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success' , ' password updated');

        }else{
            return redirect()->back()->with('error' , 'old password dont match');
        }

    }
}
