<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\FeeCategoryAmount;
class FeeAmountController extends Controller
{
         //view class
         public function view()
         {

             $data ['allData'] = FeeCategoryAmount::all();

             return view('backend.setups.fee_amount.view-fee-amount', $data);
         }

}
