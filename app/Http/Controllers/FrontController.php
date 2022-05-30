<?php

namespace App\Http\Controllers;

use Str;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Kelas;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function pribadi()
     {
        $button = "Simpan";

        $daftar_kelas = Kelas::pluck('nama','id');

        $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.pribadi',compact('button','daftar_kelas','daftar_guru'));
     }
     
     public function kelompok()
     {
         $button = "Simpan";

         $daftar_kelas = Kelas::pluck('nama','id');

         $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.kelompok',compact('button','daftar_kelas','daftar_guru'));
     }
     
     public function konseling_kelompok()
     {
        $button = "Simpan";

        $daftar_kelas = Kelas::pluck('nama','id');

        $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.konseling_kelompok',compact('button','daftar_kelas','daftar_guru'));
     }

     public function karir()
     {
        $button = "Simpan";

        $daftar_kelas = Kelas::pluck('nama','id');

        $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.karir',compact('button','daftar_kelas','daftar_guru'));
     }


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
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
