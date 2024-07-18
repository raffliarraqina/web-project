<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::latest()->get();

        return view('pages.admin.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        // $user = User::findOrFail($id);

        // return view('pages.admin.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'roles' => 'required|string|in:ADMIN,USER',
        // ]);

        // $user = User::findOrFail($id);

        // $user->update([
        //     'roles' => $request->roles,
        // ]);

        // if ($user) {
        //     return redirect()->route('dashboard.admin.index')->with(
        //         'success',
        //         'Data user berhasil diupdate'
        //     );
        // } else {
        //     return redirect()->route('dashboard.admin.index')->with(
        //         'error',
        //         'Data user gagal diupdate'
        //     );
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('dashboard.admin.index')->with(
            'success',
            'Data user berhasil dihapus'
        );
    }
}
