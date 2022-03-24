<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Group;
use DB;

class StudentGroupController extends Controller
{
     //view class
     public function view()
     {

         $data ['allData'] = Group::all();

         return view('backend.setups.student_group.view-group', $data);
     }


       //add class
       public function add()
       {
          return view('backend.setups.student_group.add-group');
       }



        //Store class data
     public function store(Request $request)
     {

         $this->validate($request,[
             'name' => 'required|unique:groups,name',

         ]);
         $data = new Group();
         $data->name = $request->name;
         $data->save();

         return redirect()->route('setups.student.group.view')->with('success', 'Data added successfully');

     }



      //Edit Class
      public function edit($id)
      {

          $editData = Group::find($id);
          return view('backend.setups.student_group.add-group', compact('editData'));
      }


         //Update Class
     public function update(Request $request)
     {
        $this->validate($request,[
            'name' => 'required|unique:groups,name',

        ]);
         $dataUpdate = Group::find($request->id);
         $dataUpdate->name = $request->name;
         $dataUpdate->save();

         return redirect()->route('setups.student.group.view')->with('success', 'Data updated successfully');
     }


         //Delete Class
         public function delete($id)
         {
             $deleteData = Group::find($id);
             $deleteData->delete();
             return redirect()->route('setups.student.group.view')->with('success', 'Successfully Deleted');
         }
}
