<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\FinancialDebt;

class FinancialDebtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $financialdebts=FinancialDebt::all();
        $no=1;
        //dd($itemhistory);
        return view('/application/financialdebt',['financialdebts'=>$financialdebts,'no'=>$no]);
    }
}
