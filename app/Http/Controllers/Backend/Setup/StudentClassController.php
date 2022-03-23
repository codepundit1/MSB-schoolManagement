<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\StudentClass;
use DB;

class StudentClassController extends Controller
{
    //view class
    public function view()
    {

        $data ['allData'] = StudentClass::all();

        return view('backend.setups.student_class.view-class', $data);
    }


      //add class
      public function add()
      {
         return view('backend.setups.student_class.add-class');
      }



       //Store Data
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|unique:student_classes,name',

        ]);
        $data = new StudentClass();
        $data->name = $request->name;
        $data->save();

        return redirect()->route('setups.student.class.view')->with('success', 'Data added successfully');

    }



     //Edit Class
     public function edit($id)
     {

         $editData = StudentClass::find($id);
         return view('backend.setups.student_class.edit-class', compact('editData'));
     }


        //Update Class
    public function update(Request $request)
    {
        $dataUpdate = StudentClass::find($request->id);
        $dataUpdate->name = $request->name;
        $dataUpdate->save();

        return redirect()->route('setups.student.class.view')->with('success', 'Data updated successfully');
    }


        //Delete Class
        public function delete($id)
        {
            $deleteData = StudentClass::find($id);
            $deleteData->delete();
            return redirect()->route('setups.student.class.view')->with('success', 'Successfully Deleted');
        }
}
