<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function supplierlist()
    {
        $projects = Project::all();
        $suppliers = Supplier::all();
        return view('project.supplier', compact('projects', 'suppliers'));
    }

    public function getSupplierProject($supplier_id)
    {
        $supplier = Supplier::findOrFail($supplier_id);

        $projects = Project::orderBy('reference_no', 'asc')->where('supplier_id', $supplier_id)->get();

        $suppliers = Supplier::pluck('company_name', 'id');

        return view('project.index', compact('supplier', 'projects', 'suppliers'));

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
            'title' => 'required',
            'reference_no' => 'required',
            'status' => 'required',
        ]);
        
        $check_reference_no = Project::where('supplier_id', $request->supplier_id)->where('reference_no', $request->reference_no)->first();

        if($check_reference_no != null)
        {
            return redirect()->action('ProjectsController@getSupplierProject', ['supplier_id' => $request->supplier_id])->withErrors('Reference Number already exists!');
        }

        if ($request->hasFile('document'))
        {
            $image = '/images/project/document_project_' . time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->move(public_path('images/project/'), $image);
        }

        $project = new Project;
        $project->title = $request->title;
        $project->reference_no = $request->reference_no;
        $project->status = $request->status;
        $project->document = $image;
        $project->supplier_id = $request->supplier_id;
        $project->save();
        // dd($request);
        return redirect()->action('ProjectsController@getSupplierProject', ['supplier_id' => $request->supplier_id])->withMessage('Project has been successfully added!');
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
        $suppliers = Supplier::all();
        $project = Project::findOrFail($id);
        return view('project.edit', compact('project', 'suppliers'));
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
            'title' => 'required',
            'reference_no' => 'required',
            'status' => 'required',
        ]);

        $project = Project::findOrFail($id);
        if ($request->hasFile('document'))
        {
            $image = '/images/project/document_project_' . time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->move(public_path('images/project/'), $image);
            $project->document = $image;
        }

        $project->title = $request->title;
        $project->reference_no = $request->reference_no;
        $project->status = $request->status;
        $project->supplier_id = $request->supplier_id;
        $project->save();
        // dd($request);
        return redirect()->action('ProjectsController@getSupplierProject', ['supplier_id' => $request->supplier_id])->withMessage('Project has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
