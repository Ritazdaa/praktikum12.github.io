<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BandaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['databandara'] = DB::table('databandara')->get();
        return view('databandara', $data);
    }

    public function create()
    {
        return view('tambah_bandara');
    }

    public function store(Request $request)
    {
        $bandara_Input = $request->input('bandaraInput');
        $provinsiInput = $request->input('provinsiInput');
        $kodeInput = $request->input('kodeInput');
        $PanjangInput = $request->input('panjangInput');
        
        $query = DB::table('databandara')->insert([
            'nama_bandara' => $bandara_Input,
            'provinsi' => $provinsiInput,
            'kode_icao' => $kodeInput,
            'panjang_runway' => $PanjangInput
        ]);
        if ($query) {
            return redirect()->route('databandara')->with('success', 'data berhasil ditambahkan');
        } else {
            return redirect()->route('databandara')->with('failed', 'data gagal ditambahkan');
        }
       }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

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
        $data['databandara'] = DB::table('databandara')->where('id', $id)->first();
        return view('editbandara', $data);
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
        $bandara_Input = $request->input('bandaraInput');
        $provinsiInput = $request->input('provinsiInput');
        $kodeInput = $request->input('kodeInput');
        $PanjangInput = $request->input('panjangInput');
        $query = DB::table('databandara')->where('id',$id)->update([
            'nama_bandara' => $bandara_Input,
            'provinsi' => $provinsiInput,
            'kode_icao' => $kodeInput,
            'panjang_runway' => $PanjangInput
        ]);
        if ($query) {
            return redirect()->route('databandara')->with('success', 'data berhasil diupdate');
        } else {
            return redirect()->route('databandara')->with('failed', 'data gagalll diupdate');
        }
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('databandara')->where('id', $id)->delete();
        if ($query) {
            return redirect()->route('databandara')->with('success', 'data berhasil dihapus');
        } else {
            return redirect()->route('databandara')->with('failed', 'data gagal dihapus');
        }
    }
}
