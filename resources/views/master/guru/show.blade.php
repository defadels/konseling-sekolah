@extends('layout.master_layout')

@section('title', 'Form Data Guru')

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
                        <h4 class="card-title">File export</h4>
                        <hr>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <p>{{$guru->nip}}</p>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Guru</label>
                        
                            <p>{{$guru->nama}}</p>
                        </div>    
                        <div class="form-group">
                            <label for="email">Email</label>
                            
                            <p>{{$guru->email}}</p>
                        </div>

                        <div class="form-group">
                            <label for="mapel">Mata Pelajaran</label>
                            
                            <p>{{$guru->mapel}}</p>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">Nomor Telepon</label>
                            
                            <p>{{$guru->nomor_hp}}</p>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            
                            <p>{{$guru->alamat}}</p>
                        </div>
                    
                        <button type="button" class="btn btn-md btn-secondary" onclick="window.history.back()">Kembali</button>
                       
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