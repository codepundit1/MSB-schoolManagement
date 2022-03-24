<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Year;
use Illuminate\Support\Facades\DB;

class StudentYearController extends Controller
{
     //view class
     public function view()
     {

         $data ['allData'] = Year::all();

         return view('backend.setups.student_year.view-year', $data);
     }


       //add class
       public function add()
       {
          return view('backend.setups.student_year.add-year');
       }



        //Store class data
     public function store(Request $request)
     {

         $this->validate($request,[
             'name' => 'required|unique:years,name',

         ]);
         $data = new Year();
         $data->name = $request->name;
         $data->save();

         return redirect()->route('setups.student.year.view')->with('success', 'Data added successfully');

     }



      //Edit Class
      public function edit($id)
      {

          $editData = Year::find($id);
          return view('backend.setups.student_year.add-year', compact('editData'));
      }


         //Update Class
     public function update(Request $request)
     {
         $dataUpdate = Year::find($request->id);
         $dataUpdate->name = $request->name;
         $dataUpdate->save();

         return redirect()->route('setups.student.year.view')->with('success', 'Data updated successfully');
     }


         //Delete Class
         public function delete($id)
         {
             $deleteData = Year::find($id);
             $deleteData->delete();
             return redirect()->route('setups.student.year.view')->with('success', 'Successfully Deleted');
         }
}
