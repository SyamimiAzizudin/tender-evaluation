<?php

namespace App\Http\Controllers;

use Auth;
use App\Evaluate;
use App\Supplier;
use App\Criteria;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pending_eva_count = DB::table('projects')
                            ->select('status')
                            ->where ('status', '=', 'Not Evaluated')
                            ->count();
        $completed_eva_count = DB::table('projects')
                            ->select('status')
                            ->where ('status', '=', 'Completed')
                            ->count();
        $evaluates = Evaluate::with(['projects'])->get();
        return view('evaluation.index', compact('evaluates', 'pending_eva_count', 'completed_eva_count'));
    }

    public function getEvaluation($id)
    {
        // $evaluates = Evaluate::pluck('title', 'id');
        $evaluate = Evaluate::findOrFail($id);
        $evaluates = Evaluate::with(['projects'])->get();
        $criterias = Evaluate::with(['criterias'])->get();
        return view('evaluation.single', compact('evaluate', 'evaluates', 'criterias'));
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
}
