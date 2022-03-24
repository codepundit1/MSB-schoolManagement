<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\FeeCategory;
use DB;

class FeeCategoryController extends Controller
{
     //view class
     public function view()
     {

         $data ['allData'] = FeeCategory::all();

         return view('backend.setups.fee_category.view-fee-category', $data);
     }


       //add class
       public function add()
       {
          return view('backend.setups.fee_category.add-fee-category');
       }



        //Store class data
     public function store(Request $request)
     {

         $this->validate($request,[
             'name' => 'required|unique:fee_categories,name',

         ]);
         $data = new FeeCategory();
         $data->name = $request->name;
         $data->save();

         return redirect()->route('setups.fee.category.view')->with('success', 'Data added successfully');

     }



      //Edit Class
      public function edit($id)
      {

          $editData = FeeCategory::find($id);
          return view('backend.setups.fee_category.add-fee-category', compact('editData'));
      }


         //Update Class
     public function update(Request $request)
     {
        $this->validate($request,[
            'name' => 'required|unique:fee_categories,name',

        ]);
         $dataUpdate = FeeCategory::find($request->id);
         $dataUpdate->name = $request->name;
         $dataUpdate->save();

         return redirect()->route('setups.fee.category.view')->with('success', 'Data updated successfully');
     }


         //Delete Class
         public function delete($id)
         {
             $deleteData = FeeCategory::find($id);
             $deleteData->delete();
             return redirect()->route('setups.fee.category.view')->with('success', 'Successfully Deleted');
         }
}
