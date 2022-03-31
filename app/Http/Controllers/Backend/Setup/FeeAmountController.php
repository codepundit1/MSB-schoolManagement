<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\StudentClass;
use App\Model\FeeCategory;
use App\Model\FeeCategoryAmount;

class FeeAmountController extends Controller
{
         //view fee_amount
         public function view()
         {

             $data ['allData'] = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();

             return view('backend.setups.fee_amount.view-fee-amount', $data);
         }

          //add fee_amount
       public function add()
       {
          $data ['fee_categories'] = FeeCategory::all();
          $data ['student_classes'] = StudentClass::all();
          return view('backend.setups.fee_amount.add-fee-amount', $data);
       }


     //Store fee_amount data
     public function store(Request $request)
     {

        $countClass = count($request->class_id);
        if($countClass != NULL){
            for ($i=0; $i <$countClass ; $i++) {
                $data = new FeeCategoryAmount();
                $data->fee_category_id = $request->fee_category_id;
                $data->class_id = $request->class_id[$i];
                $data->amount = $request->amount[$i];
                $data->save();
            }
        }

         return redirect()->route('setups.fee.amount.view')->with('success', 'Data added successfully');

     }

      //Edit fee-amount
      public function edit($fee_category_id)
      {

          $data['editData '] = FeeCategoryAmount::where('fee_category_id' , $fee_category_id)->get();
          return view('backend.setups.fee_category.add-fee-category', compact('editData'));
      }


}
