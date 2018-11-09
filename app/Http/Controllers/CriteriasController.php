<?php

namespace App\Http\Controllers;

use Session;
use Excel;
use File;
use App\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriteriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criterias = Criteria::all();
        return view('criteria.index', compact('criterias'));
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
        //
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
        //
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
        //
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

    public function import(Request $request) 
    {
        //validate the xls file
        $this->validate($request, array(
            'file'  => 'required'
        ));
     
        if($request->hasFile('file')) {
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
     
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
     
                    foreach ($data as $key => $value) {
                        $insert[] = [
                            'name' => $value->name,
                            'description' => $value->description,
                        ];
                    }
     
                    if(!empty($insert)){
     
                        $insertData = DB::table('criterias')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your data has successfully imported!');
                        }else {                        
                            Session::flash('error', 'Error inserting the data!');
                            return back();
                        }
                    }
                }
     
                return back();
     
            } else {
                Session::flash('error', 'File is a '.$extension.' file. Please upload a valid xls/csv file.');
                return back();
            }
        }
    }
}
