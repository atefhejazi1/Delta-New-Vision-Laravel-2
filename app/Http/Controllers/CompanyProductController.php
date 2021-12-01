<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CompanyProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyProducts = CompanyProduct::all();
        return view('allCompanyProducts', compact('companyProducts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();

        return view('companyProducts.addCompanyProduct' , compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save image in folder
        $file_name = "";
        if ($request->hasFile('companyProductImage')) {
            $file = $request->file('companyProductImage');
            $file_extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/company-products/';
            $file->move($path, $file_name);
        }


        CompanyProduct::create([
            'companyProductName' => $request->companyProductName,
            'companyProductDescription' => $request->companyProductDescription,
            'company_id' => $request->company_id,
            'companyProductImage' => $file_name,
        ]);
        $companyProduct = CompanyProduct::all();

        return redirect('showCompanyProducts');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CompanyProduct $companyProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyProduct $companyProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CompanyProduct $companyProduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyProduct = CompanyProduct::find($id);
        return view('companyProducts.editCompanyProduct', compact('companyProduct'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyProduct $companyProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyProduct $companyProduct)
    {
        $file_name = "";
        if ($request->hasFile('companyProductImage')) {
            $file = $request->file('companyProductImage');
            $file_extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/company-products/';
            $file->move($path, $file_name);
        }

        $companyProduct = CompanyProduct::findOrFail($request->id);

        $companyProduct->update([
            'companyProductName' => $request->companyProductName,
            'companyProductDescription' => $request->companyProductDescription,
            'company_id' => $request->company_id,
            'companyProductImage' => $file_name,
        ]);
        return redirect('showCompanyProducts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CompanyProduct $companyProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $companyProduct = CompanyProduct::findOrFail($request->id);
        $companyProduct->delete();
        return redirect('showCompanyProducts');
    }
}
