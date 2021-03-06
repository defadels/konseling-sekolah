@extends('layout.siswa_layout')

@section('title','Form BK Pribadi')

@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Form BK Pribadi</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Bimbingan Konseling Pribadi</li>
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
                        <h5 class="card-title">Konseling Pribadi</h5>
                        <hr>
                        <form action="{{route($url)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Dibuat Oleh</label>
                                <p>{{Auth::user()->nama}} - [Kelas {{Auth::user()->pilihan_kelas->nama}}]</p>
                            </div>

                            <div class="form-group">
                                {!! Form::label('kepada_guru_id', 'Ajukan Kepada Guru :') !!}

                                {!! Form::select('kepada_guru_id', $daftar_guru, old('kepada_guru_id'), ['placeholder' => '--Pilih guru--', 'class' => 'form-control']) !!}
                            </div>
                            
                            <div class="form-group">
                                <label for="judul_bk">Judul</label>
                                <input type="text" name="judul_bk" id="judul_bk" class="form-control @error('judul_bk') {{'is-invalid'}} @enderror" placeholder="Judul bimbingan">
                                
                                @error('judul_bk')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pokok_pembahasan">Pokok Pembahasan</label>
                                <textarea name="pokok_pembahasan" cols="30" rows="10" id="pokok_pembahasan" placeholder="Tuliskan pokok pembahasan" class="form-control @error('pokok_pembahasan') {{'is-invalid'}} @enderror"></textarea>
                            
                                @error('pokok_pembahasan')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
    
                            <button type="button" class="btn btn-md btn-secondary" onclick="window.history.back()">Kembali</button>
                        <input type="submit" value="{{$button}}" class="btn btn-md btn-info">
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