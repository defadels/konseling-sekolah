<?php

namespace App\Http\Controllers;

use Str;
use Auth;
use App\User;
use App\Kelas;
use Validator; 
use App\BKSiswa;
use App\LayananBK;
use Carbon\Carbon; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
        $button = "Kirim";

        $url = 'bimbingan.pribadi.store';

        $daftar_kelas = Kelas::pluck('nama','id');

        $daftar_siswa = User::where('jenis','siswa')->get();

        // dd($daftar_siswa);

        $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.pribadi',compact('button','daftar_kelas','daftar_guru','url','daftar_siswa'));
     }
     
     public function pribadiPost(Request $request)
     {
        $input = $request->all();

        $rules = [
            'judul_bk' => 'required',
            'pokok_pembahasan' => 'required'
        ];

        $message = [
            'judul_bk.required' => 'Judul harus dibuat',
            'pokok_pembahasan.required' => 'Pokok pembahasan harus dibuat',
        ];

        $validates = Validator::make($input, $rules, $message)->validate();

        $sekarang = Carbon::now();

        $nomorBK = 'BK/'.$sekarang->format('ymd').'/'.'PRIBADI/'.Str::upper(Str::random(4));

        $data_bk = new LayananBK;
        $data_bk->judul_bk = $request->judul_bk;
        $data_bk->nomor_bk = $request->nomor_bk = $nomorBK;
        $data_bk->pokok_pembahasan = $request->pokok_pembahasan;
        $data_bk->dibuat_oleh_id = $request->dibuat_oleh_id;
        $data_bk->kepada_guru_id = $request->kepada_guru_id;
        $data_bk->status = 'Belum Ditanggapi';
        $data_bk->jenis = 'Konseling Pribadi';
        $data_bk->save();

        $siswa = User::find($request->dibuat_oleh_id);

        $data_siswa = new BKSiswa;
        $data_siswa->nama_siswa = $data_bk->dibuat_oleh->nama;
        $data_siswa->kelas = $siswa->pilihan_kelas->nama;
        $data_siswa->bk_siswa_id = $data_bk->id;
        $data_siswa->save();

        return redirect()->route('bimbingan.berhasil')
        ->with('message',__('bimbingan.create',['module' => $data_bk->nomor_bk]));
     }
     
     public function kelompok()
     {
         $button = "Kirim";

         $url = 'bimbingan.kelompok.store';

         $daftar_kelas = Kelas::pluck('nama','id');

         $daftar_siswa = User::where('jenis','siswa')->get();

         $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.kelompok',compact('button','daftar_kelas','daftar_guru','url','daftar_siswa'));
     }
     
     public function kelompokPost(Request $request)
     {
        $input = $request->all();

        // dd($input);

        $rules = [
            'judul_bk' => 'required',
            'pokok_pembahasan' => 'required'
        ];

        $message = [
            'judul_bk.required' => 'Judul harus dibuat',
            'pokok_pembahasan.required' => 'Pokok pembahasan harus dibuat',
        ];

        $validates = Validator::make($input, $rules, $message)->validate();

        $sekarang = Carbon::now();

        $nomorBK = 'BK/'.$sekarang->format('ymd').'/'.'BIMBINGAN-KONSELING-KELOMPOK/'.Str::upper(Str::random(4));
        
        $data_bk = new LayananBK;
        $data_bk->nomor_bk = $request->nomor_bk = $nomorBK;
        $data_bk->judul_bk = $input['judul_bk'];
        $data_bk->pokok_pembahasan = $input['pokok_pembahasan'];
        $data_bk->status = 'Belum Ditanggapi';
        $data_bk->jenis = 'Bimbingan Konseling Kelompok';
        $data_bk->dibuat_oleh_id = $request->dibuat_oleh_id;
        $data_bk->kepada_guru_id = $request->kepada_guru_id;
        $data_bk->save();

        
        // $data_siswa = new BKSiswa;
        // $data_siswa->nama_siswa = $input['nama_siswa'];
        // $data_siswa->kelas = $input['kelas'];
        // $data_siswa->bk_siswa_id = $data_bk->id;
        // $data_siswa->save();

        // $nama_siswa = $request->nama_siswa;
        // $kelas = $request->kelas;
        // $bk_siswa_id = $data_bk->id;

        if($input['kelas'] > 0){
            foreach($input['kelas'] as $item => $value){
                $input2 = array(
                    'bk_siswa_id'=> $data_bk->id,
                    'nama_siswa' => $input['nama_siswa'][$item],
                    'kelas' => $input['kelas'][$item],
                );
                BKSiswa::create($input2);
            }
        }
        
        // for($i = 0; $i = count($nama_siswa); $i++){
        //     $datasave = [
        //         'bk_siswa_id' => $bk_siswa_id,
        //         'nama_siswa' => $nama_siswa[$i],
        //         'kelas' => $kelas[$i],
        //     ];
        //    DB::table('bk_siswa')->insert($datasave);
        // }


        return redirect()->route('bimbingan.berhasil')
        ->with('message',__('bimbingan.create',['module' => $data_bk->nomor_bk]));
     }
     
     public function konseling_kelompok()
     {
        $button = "Kirim";

        $url = 'bimbingan.konseling_kelompok.store';

        $daftar_siswa = User::where('jenis','siswa')->get();

        

        $daftar_kelas = Kelas::pluck('nama','id');

        $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.konseling_kelompok',compact('button','daftar_kelas','daftar_guru','url','daftar_siswa'));
     }
     
     public function konseling_kelompokPost(Request $request)
     {
        $input = $request->all();

        // dd($input);

        $rules = [
            'judul_bk' => 'required',
            'pokok_pembahasan' => 'required'
        ];

        $message = [
            'judul_bk.required' => 'Judul harus dibuat',
            'pokok_pembahasan.required' => 'Pokok pembahasan harus dibuat',
        ];

        $validates = Validator::make($input, $rules, $message)->validate();

        $sekarang = Carbon::now();

        $nomorBK = 'BK/'.$sekarang->format('ymd').'/'.'KONSELING-KELOMPOK/'.Str::upper(Str::random(4));

        $data_bk = new LayananBK;
        $data_bk->nomor_bk = $request->nomor_bk = $nomorBK;
        $data_bk->judul_bk = $input['judul_bk'];
        $data_bk->pokok_pembahasan = $input['pokok_pembahasan'];
        $data_bk->status = 'Belum Ditanggapi';
        $data_bk->jenis = 'Konseling Kelompok';
        $data_bk->dibuat_oleh_id = $request->dibuat_oleh_id;
        $data_bk->kepada_guru_id = $request->kepada_guru_id;
        $data_bk->save();

        
        // $data_siswa = new BKSiswa;
        // $data_siswa->nama_siswa = $input['nama_siswa'];
        // $data_siswa->kelas = $input['kelas'];
        // $data_siswa->bk_siswa_id = $data_bk->id;
        // $data_siswa->save();

        // $nama_siswa = $request->nama_siswa;
        // $kelas = $request->kelas;
        // $bk_siswa_id = $data_bk->id;

        if($input['kelas'] > 0){
            foreach($input['kelas'] as $item => $value){
                $input2 = array(
                    'bk_siswa_id'=> $data_bk->id,
                    'nama_siswa' => $input['nama_siswa'][$item],
                    'kelas' => $input['kelas'][$item],
                );
                BKSiswa::create($input2);
            }
        }
        
        // for($i = 0; $i = count($nama_siswa); $i++){
        //     $datasave = [
        //         'bk_siswa_id' => $bk_siswa_id,
        //         'nama_siswa' => $nama_siswa[$i],
        //         'kelas' => $kelas[$i],
        //     ];
        //    DB::table('bk_siswa')->insert($datasave);
        // }


        return redirect()->route('bimbingan.berhasil')
        ->with('message',__('bimbingan.create',['module' => $data_bk->nomor_bk]));
     }

     public function karir()
     {
        $button = "Kirim";

        $url = 'bimbingan.karir.store';

        $daftar_kelas = Kelas::pluck('nama','id');

        $daftar_siswa = User::where('jenis','siswa')->get();

        $daftar_guru = User::whereIn('jenis',['guru','master'])->pluck('nama','id');

         return view('bimbingan.karir',compact('button','daftar_kelas','daftar_guru','url','daftar_siswa'));
     }
     
     public function karirPost(Request $request)
     {
        $input = $request->all();

        $rules = [
            'judul_bk' => 'required',
            'pokok_pembahasan' => 'required'
        ];

        $message = [
            'judul_bk.required' => 'Judul harus dibuat',
            'pokok_pembahasan.required' => 'Pokok pembahasan harus dibuat',
        ];

        $validates = Validator::make($input, $rules, $message)->validate();

        $sekarang = Carbon::now();

        $nomorBK = 'BK/'.$sekarang->format('ymd').'/'.'KARIR/'.Str::upper(Str::random(4));

        $data_bk = new LayananBK;
        $data_bk->judul_bk = $request->judul_bk;
        $data_bk->nomor_bk = $request->nomor_bk = $nomorBK;
        $data_bk->pokok_pembahasan = $request->pokok_pembahasan;
        $data_bk->dibuat_oleh_id = $request->dibuat_oleh_id;
        $data_bk->kepada_guru_id = $request->kepada_guru_id;
        $data_bk->status = 'Belum Ditanggapi';
        $data_bk->jenis = 'Bimbingan Konseling Karir';
        $data_bk->save();
        
        $siswa = User::find($request->dibuat_oleh_id);

        $data_siswa = new BKSiswa;
        $data_siswa->nama_siswa = $data_bk->dibuat_oleh->nama;
        $data_siswa->kelas = $siswa->pilihan_kelas->nama;
        $data_siswa->bk_siswa_id = $data_bk->id;
        $data_siswa->save();

        return redirect()->route('bimbingan.berhasil')
        ->with('message',__('bimbingan.create',['module' => $data_bk->nomor_bk]));
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
    public function show()
    {
        return view('bimbingan.berhasil');
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
