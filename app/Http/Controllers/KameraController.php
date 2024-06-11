<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kamera'] = DB::table('kamera')->get();
        return view('kamera', $data);
    }

    public function create()
    {
        return view('tambahkamera');
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $merk = $request->input('merk');
        $stok = $request->input('stok');
        $harga_sewa = $request->input('harga_sewa');
        
        $query = DB::table('kamera')->insert([
            'id' => $id,
            'merk' => $merk,
            'stok' => $stok,
            'harga_sewa' => $harga_sewa
        ]);
        if ($query) {
            return redirect()->route('kamera')->with('success', 'data berhasil ditambahkan');
        } else {
            return redirect()->route('kamera')->with('failed', 'data gagal ditambahkan');
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
        $data['kamera'] = DB::table('kamera')->where('id', $id)->first();
        return view('editkamera', $data);
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
        $id = $request->input('id');
        $merk = $request->input('merk');
        $stok = $request->input('stok');
        $harga_sewa = $request->input('harga_sewa');
        $query = DB::table('kamera')->where('id',$id)->update([
            'id' => $id,
            'merk' => $merk,
            'stok' => $stok,
            'harga_sewa' => $harga_sewa
        ]);
        if ($query) {
            return redirect()->route('kamera')->with('success', 'data berhasil diupdate');
        } else {
            return redirect()->route('kamera')->with('failed', 'data gagalll diupdate');
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
        $query = DB::table('kamera')->where('id', $id)->delete();
        if ($query) {
            return redirect()->route('kamera')->with('success', 'data berhasil dihapus');
        } else {
            return redirect()->route('kamera')->with('failed', 'data gagal dihapus');
        }
    }
}