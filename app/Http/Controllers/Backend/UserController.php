<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //view users
    public function view()
    {
        $data ['allData'] = User::all();

        return view('backend.users.view-users', $data);
    }

    //add user
    public function add()
    {
       return view('backend.users.add-users');
    }

    //Store Data
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'email' => 'required|email|unique:users,email,',
            'password' => "required|min:6|same:confirm_password",
            'confirm_password' => "required:min:6|same:password",
            // 'password_current' => "required:min:6"
        ]);
        $data = new User();
        $data->userType = $request->userType;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect()->route('users.view');

    }


    //Edit User
    public function edit($id)
    {
        $data = User::find($id);
        return view('backend.users.edit-users', compact('data'));
    }

    //Update User
    public function update(Request $request)
    {

    }
}
