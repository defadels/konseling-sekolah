@extends('layout.master_layout')

@section('title','Data BK Ditanggapi')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Data BK Sudah Ditanggapi</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">BK Ditanggapi</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex mr-3 ml-2">
                    <div class="chart-text mr-2">
                        
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
                        <h4 class="card-title">Data BK Sudah Ditanggapi</h4>
                        
                        <div class="table-responsive">
                            @if(count($data_bk) > 0)  
                            <table id="default_order" class="table table-striped table-bordered display"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nomor BK</th>
                                        <th>Nama Siswa</th>
                                        <th>Kepada</th>
                                        <th>Jenis BK</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        @foreach($data_bk as $bk)  
                                        <tr>
                                            <td>{{$bk->nomor_bk}}</td>
                                            <td>{{$bk->dibuat_oleh->nama}}</td>
                                            <td>{{$bk->ditanggapi_oleh->nama}}</td>
                                            <td>{{trans(ucfirst($bk->jenis))}}</td>
                                            <td> <a href="{{route('master.bimbingan.ditanggapi.show',$bk->id)}}" title="Lihat" class="btn btn-md btn-info">
                                                <i class="fas fa-eye"></i> Lihat
                                            </a>
                                        </tr>
                                        @endforeach
                                      
                                </tbody>
                         
                            </table>
                            @else
                            <h2 class="text-center p-3">Data BK Ditanggapi Kosong</h2>
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