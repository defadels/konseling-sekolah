@extends('layout.siswa_layout')

@section('title','Konseling Kelompok')

@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Form Konseling Kelompok</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Konseling Kelompok</li>
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
                        <h5 class="card-title">Konseling Kelompok</h5>
                        <hr>
                        <form action="{{route($url)}}" method="post" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-group">
                                {!! Form::label('kepada_guru_id', 'Ajukan Kepada Guru :') !!}

                                {!! Form::select('kepada_guru_id', $daftar_guru, old('kepada_guru_id'), ['placeholder' => '--Pilih guru--', 'class' => 'form-control']) !!}
                            </div> 
                            
                                <div class="table-respnsive">
                                    <table class="table" id="tabel_pesanan">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Kelas</th>
                                                <th><a id="addRow" class="text-end btn btn-icon btn-outline-warning btn-sm" href="javascript:void(0)"><i class="fadeIn animated fas fa-plus"></i></a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="nama_siswa[]" class="form-control" value="{{Auth::user()->nama}}" readonly></td>
                                                <td><input type="text" name="kelas[]" class="form-control" value="{{Auth::user()->pilihan_kelas->nama}}" readonly></td>
                                                <td><a id="addRow" class="btn btn-icon btn-outline-warning btn-sm waves-effect waves-light" href="javascript:void(0)"><i class="fadeIn animated fas fa-trash-alt"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                    
    
                        
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul_bk" id="judul_bk" class="form-control" placeholder="Judul bimbingan">
                            </div>
                            <div class="form-group">
                                <label for="judul">Pokok Pembahasan</label>
                                <textarea name="pokok_pembahasan" cols="30" rows="10" id="pokok_pembahasan" placeholder="Tuliskan pokok pembahasan" class="form-control"></textarea>
                            </div>
    
                            <button type="button" class="btn btn-md btn-secondary" onclick="window.history.back()">Kembali</button>
                        <input type="submit" value="{{$button}}" class="btn btn-md btn-info">
                        </form>
                    </div>
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

@section('page_script')
    <script>		
		$('thead').on('click', '#addRow', function(){
			var tr = "<tr>"
						+"<td><input type='text' name='nama_siswa[]' class='form-control' value='''></td>"
						+"<td><input type='text' name='kelas[]' class='form-control' value=''></td>"
						+"<td><a class='btn btn-icon btn-outline-warning btn-sm waves-effect waves-light'id='deleteRow' href='javascript:void(0)'><i class='fadeIn animated fas fa-trash-alt'></i></a></td>"
					+"</tr>"
		$('tbody').append(tr);
		});

		$('tbody').on('click', '#deleteRow', function(){
			$(this).parent().parent().remove();
		});
    </script>
@endsection