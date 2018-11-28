<?php

namespace App\Http\Controllers;

use App\User;
use App\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UsersController extends Controller
{
    use RegistersUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::with(['suppliers'])->get();
        $users = User::all();

        // restore delete user back
        // $users = User::with(['suppliers'])->withTrashed()->restore();

        // count user
        $user_count = DB::table('users')
                ->select('role')
                ->count();
        $admin_count = DB::table('users')
                ->select('role')
                ->where ('role', '=', 'Super Admin')
                ->count();
        $eva_count = DB::table('users')
                ->select('role')
                ->where('role', '=', 'Evaluator Commercial')
                ->orWhere('role', '=', 'Evaluator Technical')
                ->count();
        $po_count = DB::table('users')
                ->select('role')
                ->where ('role', '=', 'Project Owner')
                ->count();

        $suppliers = Supplier::pluck('company_name','id');

        return view('user.index', compact('users', 'suppliers', 'user_count', 'admin_count', 'eva_count', 'po_count'));
    }

    public function bulkEdit() {

        $users = User::with(['suppliers'])->get();
        // $users = User::findOrFail();
        return view('user.bulk', compact('suppliers', 'users'));

    }

    public function bulkUpdate(Request $request) {

        $this->validate($request, [
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $users = new User;
        $users->created_by = Auth::user()->name;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->supplier_id = $request->supplier_id;
        $users->role = $request->role;
        $users->save();

        return redirect()->action('UsersController@index')->withMessage('User has been successfully added!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('user.create');
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
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $users = new User;
        $users->created_by = Auth::user()->name;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->supplier_id = $request->supplier_id;
        $users->role = $request->role;
        $users->save();

        return redirect()->action('UsersController@index')->withMessage('User has been successfully added!');
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
        $suppliers = Supplier::pluck('company_name', 'id');
        // $users = User::pluck('name', 'id');
        $user = User::findOrFail($id);
        return view('user.edit', compact('suppliers', 'user', 'users') );
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
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->supplier_id = $request->supplier_id;
        $user->role = $request->role;
        $user->save();
        
        return redirect()->action('UsersController@index')->withMessage('User has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->withErrors('User has been successfully deleted!');
    }

}
