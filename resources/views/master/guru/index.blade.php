@extends('layout.master_layout')

@section('title','Data Guru')

@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Data Guru</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Guru</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex mr-3 ml-2">
                    <div class="chart-text mr-2">
                        <a href="{{route('master.guru.create')}}" class="btn btn-primary">+ Tambah Data</a>
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
                        <h4 class="card-title">Data Guru</h4>
                        
                        <div class="table-responsive">
                            @if(count($daftar_guru)>0) 
                            <table id="show_hide_col" class="table table-striped table-bordered display"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama Guru</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($daftar_guru as $guru) 
                                <tr>
                                    <td>{{$guru->nama}}</td>
                                    <td>{{$guru->mapel}}</td>
                                    <td>
                                     <span class="badge bg-success text-white">   
                                        {{ucfirst(trans($guru->status))}}</span></td>
                                    <td>
                                        <a href="{{route('master.guru.show',$guru->id)}}" title="Lihat" class="btn btn-md btn-info">
                                            <i class="fas fa-eye"></i> Lihat
                                        </a>
                                        <a href="{{route('master.guru.edit',$guru->id)}}" title="Edit" class="btn btn-md btn-success text-white">
                                            <i class="far fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    
                                </tr>
                                @endforeach  
                                </tbody>
                         
                            </table>
                            @else
                            <h2 class="text-center p-3">Data guru kosong</h2>
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