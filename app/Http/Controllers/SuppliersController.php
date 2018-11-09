<?php

namespace App\Http\Controllers;

use Auth;
use App\Supplier;
use Validator;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required',
            'short_name' => 'required',
            'bid_value' => 'required',
        ]);

        if ($request->hasFile('document'))
        {
            $image = '/images/supplier/document_supplier_' . time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->move(public_path('images/supplier/'), $image);
        }

        $supplier = new Supplier;
        $supplier->company_name = $request->company_name;
        $supplier->short_name = $request->short_name;
        $supplier->bid_value = $request->bid_value;
        $supplier->document = $image;
        $supplier->user_id = Auth::user()->id;
        $supplier->save();

        return redirect()->action('SuppliersController@store')->withMessage('Supplier has been successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company_name' => 'required',
            'short_name' => 'required',
            'bid_value' => 'required',
        ]);

        $supplier = Supplier::findOrFail($id);
        if ($request->hasFile('document'))
        {
            $image = '/images/supplier/document_supplier_' . time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->move(public_path('images/supplier/'), $image);
            $supplier->document = $image;
        }

        $supplier->company_name = $request->company_name;
        $supplier->short_name = $request->short_name;
        $supplier->bid_value = $request->bid_value;
        $supplier->user_id = Auth::user()->id;
        $supplier->save();

        return redirect()->action('SuppliersController@index')->withMessage('Supplier has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return back()->withErrors('Supplier has been successfully deleted!');
    }
}
