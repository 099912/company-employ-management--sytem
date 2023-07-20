<?php

namespace App\Http\Controllers;

use App\Models\Employ;
use Illuminate\Http\Request;
use App\Models\Company;
class EmployController extends Controller
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
        $data=Company::all();
        return view('admin.pages.employ.create_employ',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'companies_id'=>'required',
        ]);
        ///|size:2048

        $data=new Employ;
        $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->companies_id=$request->companies_id;
        $data->save();
    // dd($logoname);
        return redirect()->route('employ.show')->with('success', 'Data saved successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Employ $employ)
    {
        //
        $data=Employ::paginate(3);
        return view('admin.pages.employ.view_employ',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $dat=Company::all();
        $data=Employ::find($id);
        return view('admin.pages.employ.update_employ',compact('data','dat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([

            // 'firstname'=>'required',
            // 'lastname'=>'required',
            // 'email'=>'required',
            // 'phone'=>'required',
            'companies_id'=>'required',
        ]);
        ///|size:2048

        $data=Employ::find($id);
        $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->companies_id=$request->companies_id;
        $data->update();
    // dd($logoname);
        return redirect()->route('employ.show')->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $data=Employ::find($id);
        $data->delete();
        return redirect()->back();
    }
}
