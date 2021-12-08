<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggunas = Pengguna::all();

        return view('pengguna.index', compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => ['required'],
            'umur' => ['required'],
            'alamat' => ['required'],
            'photo' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:6000']
        ]);
        // dd($request);
        $data = $request->all();

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('photo', 'public');
        }
        Pengguna::create($data);

        return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengguna = Pengguna::find($id);

        return view('pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = Pengguna::find($id);

        return view('pengguna.edit', compact('pengguna'));
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
        request()->validate([
            'nama' => ['required'],
            'umur' => ['required'],
            'alamat' => ['required'],
            'photo' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:6000']
        ]);
        $data = $request->all();

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('photo', 'public');
        }
        Pengguna::find($id)->update($data);

        return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengguna::find($id)->delete();

        return redirect()->back()->with('success', 'Pengguna Berhasil Dihapus');;
    }
}
