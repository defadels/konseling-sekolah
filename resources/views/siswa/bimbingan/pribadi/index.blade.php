@extends('layout.siswa_layout')

@section('title','Data BK Pribadi')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Data BK Pribadi</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">BK Pribadi</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex mr-3 ml-2">
                    <div class="chart-text mr-2">
                  <a href="{{route('siswa.bimbingan.pribadi.create')}}" class="btn btn-primary">+ Tambah Data</a>
                    </div>
                
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
        

        <!-- Column rendering -->
        <div class="row">
            <div class="col-12">
    
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Konseling Pribadi</h5>
                        <div class="table-responsive">
                            @if(count($data_bk) >0 ) 
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nomor BK</th>
                                        <th>Judul</th>
                                        <th>Jenis BK</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach($data_bk as $data)
                                    <tr>
                                        <td>{{$data->nomor_bk}}</td>
                                        <td>{{$data->judul_bk}}</td>
                                        <td>{{trans(ucfirst($data->jenis))}}</td>
                                        <td><span class="@if($data->status == 'Belum Ditanggapi'){{'badge bg-danger text-white'}} @else {{'badge bg-success'}} @endif">{{trans(ucfirst($data->status))}}</span></td>
                                        <td>
                                            <a href="{{route('siswa.bimbingan.pribadi.show',$data->id)}}" class="btn btn-md btn-info">
                                                <i class="fas fa-eye"></i> Lihat
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
    
                            @else 
    
                                <h2 class="text-center p-3">Data Konseling Pribadi Kosong</h2>
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