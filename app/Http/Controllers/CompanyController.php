<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;



class CompanyController extends Controller
{


    public function index()
    {
        $company = Company::orderBy('id', 'desc')->paginate(5);

        return view('index1')->with('company', $company);
    }


    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return  view("index1")->with(['company' => $company]);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->location = $request->location;
        $company->address = $request->address;
        $company->bio = $request->bio;
        $company->zipcode = $request->zipcode;

        $company->save();
        return back()->with('message', 'Operation Successful !');
    }
}