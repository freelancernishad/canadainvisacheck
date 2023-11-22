<?php

namespace App\Http\Controllers;

use App\Models\VisaCheck;
use Illuminate\Http\Request;

class FrentendController extends Controller
{
    public function findByPassportNo(Request $request)
    {
        $passportNo = $request->s;
        if ($passportNo) {
            $visaCheck = VisaCheck::where('passport_no', $passportNo)->get();
            return view('visa-status.list', compact('visaCheck','passportNo'));
        } else {
            $passportNo='';
            $visaCheck = VisaCheck::orderBy('id', 'desc')->get();
            return view('visa-status.list', compact('visaCheck','passportNo'));
            // return redirect()->route('visa-status.list')->with('error', 'Visa not found with Passport Number: ' . $passportNo);
        }
    }

    public function showpass(Request $request,$passport_no)
    {
        $passportNo = $passport_no;
       $visaCheck = VisaCheck::with('visaCheckDocuments')->where('passport_no', $passportNo)->first();
        return view('visa-status.show', compact('visaCheck'));
    }




}
