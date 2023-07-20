<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidation;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.company.create_company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormValidation $request)
    {
        //
    //     $request->validate([
    //         'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg,||dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    //         'name'=>'required',
    //         'email'=>'required|unique:companies,email',
    //         'website'=>'required'
    // ]);
        ///|size:2048

        $data=new Company;
        $data->name=$request->name;
        $data->email=$request->email;

        $logoname=time().'.'.$request->logo->extension();
        $request->logo->move(public_path('companyimage'),$logoname);
        $data->logo=$logoname;
        $data->website=$request->website;
        $data->save();
    // dd($logoname);
        return redirect()->route('company.show')->with('success', 'Data saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
        $data=Company::paginate(3);
        return view('admin.pages.company.view_company',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company, $id)
    {
        $data=Company::find($id);
    return view('admin.pages.company.update_company',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg,||dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',

    ]);
        $data=Company::find($id);
        $data->name=$request->name;
        $data->email=$request->email;

        $logoname=time().'.'.$request->logo->extension();
        $request->logo->move(public_path('companyimage'),$logoname);
        $data->logo=$logoname;

        $data->website=$request->website;
        $data->save();

        return redirect()->route('company.show')->with('success', 'Data updated successfully!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company,$id)
    {
        //
        $data=Company::find($id);
        $data->delete();
        return redirect()->back();
    }
}
