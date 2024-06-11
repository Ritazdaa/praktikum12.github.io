<!-- nama : abdulhayyi
    nim : 2210131210015
-->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mahasiswa'] = DB::table('mahasiswa')->get();
        return view('mahasiswa', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahMHS');
    }

    public function store(Request $request)
    {
        $nim_Input = $request->input('nimInput');
        $namaInput = $request->input('namaInput');
        $prodiInput = $request->input('prodiInput');
        
        $query = DB::table('mahasiswa')->insert([
            'nim' => $nim_Input,
            'nama' => $namaInput,
            'prodi' => $prodiInput
        ]);
        if ($query) {
            return redirect()->route('mahasiswa')->with('success', 'data ditambahkan');
        } else {
            return redirect()->route('mahasiswa')->with('failed', 'data gagalll ditambahkan');
        }
    }
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
        $data['mahasiswa'] = DB::table('mahasiswa')->where('id', $id)->first();
        return view('editMhs', $data);
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
        $nim_Input = $request->input('nimInput');
        $namaInput = $request->input('namaInput');
        $prodiInput = $request->input('prodiInput');
        
        $query = DB::table('mahasiswa')->where('id', $id)->update([
            'nim' => $nim_Input,
            'nama' => $namaInput,
            'prodi' => $prodiInput
        ]);
        if ($query) {
            return redirect()->route('mahasiswa')->with('success', 'data diupdate');
        } else {
            return redirect()->route('mahasiswa')->with('failed', 'data gagalll diupdate');
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
        $query = DB::table('mahasiswa')->where('id', $id)->delete();
        if ($query) {
            return redirect()->route('mahasiswa')->with('success', 'data dihapus');
        } else {
            return redirect()->route('mahasiswa')->with('failed', 'data gagal dihapus');
        }
    }
}
