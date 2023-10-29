<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kataKunci = $request->kataKunci;
        if (strlen($kataKunci)) {
            $data = mahasiswa::where('nama', $kataKunci)->get();
        } else {
            $data = mahasiswa::orderBy('id', 'asc')->get();
        }
        return view('mahasiswa')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
        ];
        mahasiswa::create($data);
        return redirect()->to('mahasiswa');
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
        $data = mahasiswa::where('id', $id)->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
        ];
        $data = mahasiswa::where('id', $id)->update($data);
        return redirect()->to('mahasiswa')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = mahasiswa::where('id', $id)->delete();
        return redirect()->to('mahasiswa')->with('data', $data);
    }
}
