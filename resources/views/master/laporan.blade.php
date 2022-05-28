@extends('layout.master_layout')

@section('title','Laporan Bimbingan Konseling')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Laporan Bimbingan Konseling Siswa</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Laporan</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex mr-3 ml-2">
                   
                    
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
                        <h5 class="card-title">Tabel Data BK Siswa</h5>
                        {{-- <h6 class="card-subtitle">Exporting data from a table can often be a key part of a
                            complex application. The Buttons extension for DataTables provides three plug-ins
                            that provide overlapping functionality for data export. You can refer full
                            documentation from here <a href="https://datatables.net/">Datatables</a></h6> --}}
                        <div class="table-responsive">
                            @if(count($daftar_siswa)>0)  
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                    <th>Nomor BK</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                ?>
                                @foreach($daftar_siswa as $siswa)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$siswa->nomor_bk}}</td>
                                    <td>{{$siswa->dibuat_oleh->nama}}</td>
                                    <td>{{$siswa->dibuat_oleh->pilihan_kelas->nama}}</td>
                                    <td>{{ucfirst(trans($siswa->jenis))}}</td>
                                    <td>{{$siswa->status}}</td>
                              
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor BK</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Jenis</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                            </table>

                            @else 
                            <h2 class="text-center p-3">Data Bimbingan Konseling Kosong</h2>
                           @endif 

                        </div>
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