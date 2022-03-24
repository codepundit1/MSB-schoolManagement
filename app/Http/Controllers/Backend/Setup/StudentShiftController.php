<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Shift;
use DB;

class StudentShiftController extends Controller
{
         //view class
         public function view()
         {

             $data ['allData'] = Shift::all();

             return view('backend.setups.student_shift.view-shift', $data);
         }


           //add class
           public function add()
           {
              return view('backend.setups.student_shift.add-shift');
           }



            //Store class data
         public function store(Request $request)
         {

             $this->validate($request,[
                 'name' => 'required|unique:shifts,name',

             ]);
             $data = new Shift();
             $data->name = $request->name;
             $data->save();

             return redirect()->route('setups.student.shift.view')->with('success', 'Data added successfully');

         }



          //Edit Class
          public function edit($id)
          {

              $editData = Shift::find($id);
              return view('backend.setups.student_shift.add-shift', compact('editData'));
          }


             //Update Class
         public function update(Request $request)
         {
            $this->validate($request,[
                'name' => 'required|unique:shifts,name',

            ]);
             $dataUpdate = Shift::find($request->id);
             $dataUpdate->name = $request->name;
             $dataUpdate->save();

             return redirect()->route('setups.student.shift.view')->with('success', 'Data updated successfully');
         }


             //Delete Class
             public function delete($id)
             {
                 $deleteData = Shift::find($id);
                 $deleteData->delete();
                 return redirect()->route('setups.student.shift.view')->with('success', 'Successfully Deleted');
             }
}
