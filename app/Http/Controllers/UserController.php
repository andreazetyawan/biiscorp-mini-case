<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('welcome', [ 'user' => $user ]);
    }
    /**
     * Display the specified resource.
     */
    public function addData()
    {
        //
        return view('tambah-data');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $request->validate([
            'photoprofile' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'unique:users',
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'status' => $request->get('status'),
        ]);

        if ($request->hasFile('photoprofile')) {
            $image = $request->file('photoprofile');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
            $user->photoprofile = $imageName;
        }

        $user->save();

        return redirect('/tambah-data')->with('success', 'Data Pengawai Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
