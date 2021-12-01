<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyProduct;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.allCompanies', compact('companies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.addCompany');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Company::create([
            'companyName' => $request->companyName,
            'companyDescription' => $request->companyDescription,
        ]);
        $Company = Company::all();

        return redirect('showCompany');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.editCompany', compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company = Company::findOrFail($request->id);

        $company->update([
            'companyName' => $request->companyName,
            'companyDescription' => $request->companyDescription,
        ]);
        return redirect('showCompany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $company = Company::findOrFail($request->id);
        $company->delete();
        return redirect('showCompany');
    }
}
