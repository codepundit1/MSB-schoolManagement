<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    // View Profile
    public function view()
    {   
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.users.view-profiles',compact('user'));
    }


    //edit profile
    public function edit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.users.edit-profiles', compact('editData'));
    }


    //update profile

    public function update(Request $request){

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;
        $data->address = $request->address;

        if ($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('profiles.view')->with('success', 'Profile updated successfully');
    }


    //change password-view
    public function passwordView()
    {
        return view('backend.users.password-view');
    }


    //change password-view
    public function passwordUpdate(Request $request)
    {
        if (Auth::attempt(['id'=>Auth::user()->id, 'password'=>$request->old_password])){
            
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->route('profiles.view')->with('success', 'Password Changed successfully');
            
        }
        else
        {
            return redirect()->back()->with('error', 'Current password doesnot matched!');    
        }
    }


   
}
