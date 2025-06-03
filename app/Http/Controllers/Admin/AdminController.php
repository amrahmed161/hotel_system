<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email|unique:admins',
            'password'=>'required|min:6|confirmed'
        ]);
        Admin::create([
            'name'=>$request->name,
            'email'=> $request->email,
            'password'=> \Hash::make($request->password),
        ]);
            return redirect()->route('admin.admins.index')->with('success', 'Added Date successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = Admin::findOrFail($id);
        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:admins,email,' . $admin->id,
        'password' => 'nullable|min:6|confirmed',
    ]);
    $admin->name = $request->name;
    $admin->email =$request->email;
    if ($request->filled('password')) {
        $admin->password = \Hash::make($request->password);
    }
    $admin->save();
        return redirect()->route('admin.admins.index')->with('success', ' Updata data SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $admin = Admin::findOrFail($id);
    $admin->delete();
    return redirect()->route('admin.admins.index')->with('success', 'Delete Data SuccessFully');
    }
}
