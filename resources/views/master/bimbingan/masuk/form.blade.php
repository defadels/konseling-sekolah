@extends('layout.master_layout')

@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Form Data Guru</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Guru</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
           
                <div class="d-flex ml-2">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- File export -->
        <div class="row">
            <div class="col-12">
    
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$bk->jenis}}</h5>
                        <hr>
    
                    <div class="row mb-3">
                        <div class="col-lg-6">
                                <label for="">Nomor BK</label>
                                <p>{{$bk->nomor_bk}}</p>
                                <label for="">Dibuat Oleh</label>
                                <p>{{$bk->dibuat_oleh->nama}} - [Kelas {{$bk->dibuat_oleh->pilihan_kelas->nama}}]</p>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Tanggal</label>
                            <p>{{$bk->created_at}}</p>
                        </div>
                    </div>
                        
                    @if(count($daftar_siswa) > 1)
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <p><strong>Daftar Nama Siswa</strong></p>
                                <ol>
                                    @foreach($daftar_siswa as $siswa)
                                    <li><p>{{$siswa->nama_siswa}} - [Kelas {{$siswa->kelas}}]</p></li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                        @endif
                            
                            <div class="form-group">
                                <label for="judul_bk">Judul</label>
                               
                                <p>{{$bk->judul_bk}}</p>
                            </div>
                            <div class="form-group">
                                <label for="pokok_pembahasan">Pokok Pembahasan</label>
                                
                                
                                <p>{{$bk->pokok_pembahasan}}</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
    
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tanggapan Guru</h5>
                        <hr>
                            <div class="form-group">
                                <label for="">Nama Guru</label>
                                <p>{{Auth::user()->nama}} - [Pengajar {{Auth::user()->mapel}}]</p>
                            </div>
    
                          <form action="{{route($url, $bk->id)}}" method="post">
                            @csrf
    
                            @method('put')
                            <div class="form-group">
                                <label for="judul_tanggapan">Judul</label>
                               <input type="text" name="judul_tanggapan" class="form-control @error('judul_tanggapan') {{'is-invalid'}} @enderror">
                            
                                @error('judul_tanggapan')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggapan">Tanggapan</label>
                                <textarea name="tanggapan" id="tanggapan" cols="30" rows="10" class="form-control"></textarea>
                            </div>
    
                            <button type="button" class="btn btn-md btn-secondary" onclick="window.history.back()">Kembali</button>
                            <input type="submit" value="{{$button}}" class="btn btn-md btn-primary">
                        </form>  
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection