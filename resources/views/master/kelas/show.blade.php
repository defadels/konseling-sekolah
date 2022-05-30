@extends('layout.master_layout')

@section('title', 'Lihat Data Kelas')

@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Data Kelas</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Kelas</li>
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
                        <h4 class="card-title">Lihat Data Kelas</h4>
                        <hr>
                        <div class="form-group">
                            <label for="nama">Nama Kelas</label>
                            
                              <p>{{$kelas->nama}}</p>
                          </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                           
                            <p>{{$kelas->keterangan}}</p>
                      </div>
                          <button type="button" class="btn btn-md btn-secondary" onclick="window.history.back()">Kembali</button>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Siswa Dalam Kelas</h5>
                        <hr>
                      @if(count($data_siswa) > 0)  
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Nomor Handphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_siswa as $siswa)
                                <tr>
                                    <td>{{$siswa->nama}}</td>
                                    <td>{{trans(ucfirst($siswa->jenis_kelamin))}}</td>
                                    <td>{{$siswa->nomor_hp}}</td>
                                </tr>
                               
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th colspan="2"><strong>Total Siswa</strong></th>
                                <td><strong>{{$data_siswa->count()}}</strong></td>
                            </tfoot>
                        </table>
                        @else
                            <h2 class="p-3 text-center">Data Siswa Dalam Kelas Kosong</h2>
                        @endif
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