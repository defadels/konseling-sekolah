@extends('layout.guru_layout')

@section('title', 'Lihat Data Siswa')

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
                        <h4 class="card-title">Lihat Data Siswa</h4>
                        <hr>
                        
                        <div class="form-group">
                          {!! Form::label('nis', 'NIS') !!}
                          <p>{{$siswa->nis}}</p>
  
                        </div>
  
                      <div class="form-group">
                          {!! Form::label('nama', 'Nama Siswa') !!}
                          <p>{{$siswa->nama}}</p>
  
                        </div>
  
                        <div class="form-group">
                            {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
                            <p>{{$siswa->tempat_lahir}}</p>
  
                          </div>
                        
                          <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            {!! Form::label('tanggal_lahir','Tanggal Lahir') !!}
                            <p>{{$siswa->tanggal_lahir}}</p>
                          </div>
                        
  
                      <div class="form-group">
                        {!! Form::label('jenis_kelamin', 'Jenis Kelamin') !!}
                        <p>{{$siswa->jenis_kelamin}}</p>
                        </div>
  
                        <div class="form-group">
                            {!! Form::label('agama', 'Agama') !!}
                            <p>{{$siswa->agama}}</p>
                          </div>
  
                          <div class="form-group">
                            <label for="nomor_hp">Nomor Telepon</label>
                            {!! Form::label('nomor_hp','Nomor Telepon') !!}
                            <p>{{$siswa->nomor_hp}}</p>
                          </div>
  
                        <div class="form-group">
                          {!! Form::label('email', 'Email') !!}
  
                          <p>{{$siswa->email}}</p>
  
  
                          </div>
  
                          <div class="form-group">
                            {!! Form::label('kelas_id', 'Kelas') !!}
  
                            <p>{{$siswa->pilihan_kelas->nama}}</p>
  
                          </div>
  
                      <div class="form-group">
                          {!! Form::label('alamat', 'Alamat') !!}
                          <p>{{$siswa->alamat}}</p>
                      
                          
                      </div>
                      
                          <button type="button" class="btn btn-md btn-secondary" onclick="window.history.back()">Kembali</button>
    
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