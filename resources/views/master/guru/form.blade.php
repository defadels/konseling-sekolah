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
                  <form action="{{route($url, $guru->id ?? '')}}" method="post">
                      @csrf

                      @if(isset($guru))
                      @method('put')
                      @endif
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" value="{{old('nip') ?? $guru->nip ?? ''}}" name="nip" id="nio" maxlength="8" class="form-control @error('nip'){{'is-invalid'}}@enderror" placeholder="Masukkan NIP guru">
                        <small>*Kosongkan jika tidak ada NIP</small>

                        @error('nip')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Guru</label>
                        <input type="text" value="{{old('nama') ?? $guru->nama ?? ''}}" name="nama" id="nama" class="form-control @error('nama'){{'is-invalid'}}@enderror" placeholder="Masukkan nama guru">

                        @error('nama')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{old('email') ?? $guru->email ?? ''}}" name="email" id="" class="form-control @error('email'){{'is-invalid'}}@enderror" placeholder="Masukkan email guru">

                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" @if(isset($guru))placeholder="Ketik jika ingin diubah"@endif name="password" id="" class="form-control @error('password'){{'is-invalid'}}@enderror" placeholder="Masukkan password guru">

                        @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mapel">Mata Pelajaran</label>
                        <input type="text" value="{{old('mapel') ?? $guru->mapel ?? ''}}" name="mapel" id="" class="form-control @error('mapel'){{'is-invalid'}}@enderror" placeholder="Masukkan mata pelajaran guru">

                        @error('mapel')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">Nomor Telepon</label>
                        <input type="text" value="{{old('nomor_hp') ?? $guru->nomor_hp ?? ''}}" name="nomor_hp" id="" class="form-control @error('nomor_hp'){{'is-invalid'}}@enderror" placeholder="Masukkan nomor handphone">

                        @error('nomor_hp')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control @error('alamat'){{'is-invalid'}}@enderror" placeholder="Masukkan alamat lengkap">{{old('alamat') ?? $guru->alamat ?? ''}}</textarea>

                        @error('alamat')
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