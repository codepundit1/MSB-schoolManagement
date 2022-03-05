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
}
