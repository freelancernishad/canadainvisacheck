<?php

namespace App\Http\Controllers;

use App\Models\VisaCheck;
use Illuminate\Http\Request;
use App\Models\VisaCheckDocument;

class VisaCheckController extends Controller
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













    public function index()
    {
        $visaChecks = VisaCheck::all();
        return view('visa_checks.index', compact('visaChecks'));
    }

    public function show($id)
    {
        $visaCheck = VisaCheck::find($id);
        return view('visa_checks.show', compact('visaCheck'));
    }

    public function create()
    {
        return view('visa_checks.create');
    }

    public function store(Request $request)
    {
        $requestdata = $request->except('image');
        $image = $request->image;

        $imageFile = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('images', $imageFile, 'public');

        $requestdata['image'] = $imageFile;

       $visaCheck =  VisaCheck::create($requestdata);


        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('visa_documents', $filename, 'public');

                // Save the file details to the database
                VisaCheckDocument::create([
                    'visa_check_id' => $visaCheck->id,
                    'document_name' => $filename,
                    'file_path' => 'visa_documents/' . $filename,
                ]);
            }
        }

        return redirect()->route('visa_checks.index');
    }

    public function edit($id)
    {
        $visaCheck = VisaCheck::find($id);
        return view('visa_checks.edit', compact('visaCheck'));
    }

    public function update(Request $request, $id)
    {
        $visaCheck = VisaCheck::find($id);
        $visaCheck->update($request->all());
        return redirect()->route('visa_checks.index');
    }

    public function destroy($id)
    {
        VisaCheck::find($id)->delete();
        return redirect()->route('visa_checks.index');
    }
}
