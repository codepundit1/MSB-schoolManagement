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

        return redirect()->route('users.view')->with('success', 'Data added successfully');

    }


    //Edit User
    public function edit($id)
    {
        $editData = User::find($id);
        return view('backend.users.edit-users', compact('editData'));
    }

    //Update User
    public function update(Request $request)
    {
        $dataUpdate = User::find($request->id);
        $dataUpdate->userType = $request->userType;
        $dataUpdate->name = $request->name;
        $dataUpdate->email = $request->email;
        $dataUpdate->save();

        return redirect()->route('users.view')->with('success', 'Data updated successfully');
    }

    //Delete User
    public function delete($id)
    {
        $deleteData = User::find($id);

        if (file_exists('upload/user_images/' . $deleteData->image) AND !empty($deleteData->image)){
            unlink('upload/user_images/' . $deleteData->image);
        }
        $deleteData->delete();
        return redirect()->route('users.view')->with('success', 'Successfully Deleted');
    }
}
