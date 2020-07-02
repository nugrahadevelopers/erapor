<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Admin;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return response()->json([
            'message' => 'Menampilkan semua Admin',
            'data' => $admin,
        ]);
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
    public function store(AdminRequest $request)
    {
        $admin = new Admin;
        $admin->user_id = '5';
        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->save();

        if ($admin) {
            return response()->json([
                'status'  => true,
                'message' => 'Admin Berhasil Disimpan!',
                'data'    => $admin
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Admin Gagal Disimpan!',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return response()->json([
            'message' => "Menamplkan Admin",
            'data' => $admin
        ]);
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
    public function update(Request $request, Admin $admin)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $admin->update($data);

        return response()->json([
            'message' => "Data Admin telah berhasil diupdate",
            'data' => $admin,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return response()->json([
            'message' => "Berhasil dihapus"
        ], 200);
    }

    public function vadmin()
    {
        $user = User::all();
        return view('erapor.admin', ['user' => $user]);
    }
}
