@extends('layout.front_layout')

@section('content')
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Konseling Kelompok</h5>
                <hr>
                <form action="{{route($url)}}" method="post">
                    @csrf
                    {{-- <div class="form-group">
                        {!! Form::label('dibuat_oleh_id', 'Nama Siswa') !!}
    
                        {!! Form::select('dibuat_oleh_id', $daftar_siswa, old('dibuat_oleh_id'), ['placeholder' => '--Pilih siswa--', 'class' => 'select2 form-control','id' => 'siswa']) !!}
                    </div> --}}

                    <div class="form-group">
                        <label for="dibuat_oleh_id">Nama Siswa</label>
                        <select name="dibuat_oleh_id" class="select2 form-control" id="">
                            <option value="">Pilih Siswa</option>
                            @foreach($daftar_siswa as $siswa)
                                <option value="{{$siswa->id}}">{{$siswa->nama}} [{{$siswa->nis}}][Kelas - {{$siswa->pilihan_kelas->nama}}]</option>
                            @endforeach
                        </select>
                    </div>

                      <br>

                    <div class="table-respnsive">
                        <h6>Masukkan Nama Anggota Kelompok</h6>
                        <table class="table table-secondary" id="tabel_pesanan">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Kelas</th>
                                    <th><a id="addRow" class="text-end btn btn-icon btn-primary btn-sm" href="javascript:void(0)"><i class="fadeIn animated fas fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    {{-- <td><a id="deleteRow" class="btn btn-icon btn-outline-primary btn-sm waves-effect waves-light" href="javascript:void(0)"><i class="fadeIn animated fas fa-trash-alt"></i></a></td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>

                     
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Isi Pengaduan</h5>

                <hr>

                <br>

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

              <div class="form-group">
                  {!! Form::label('kepada_guru_id', 'Ajukan Kepada Guru :') !!}

                  {!! Form::select('kepada_guru_id', $daftar_guru, old('kepada_guru_id'), ['placeholder' => '--Pilih guru--', 'class' => 'form-control']) !!}
              </div>

              <button type="button" class="btn btn-md btn-secondary" onclick="window.history.back()">Kembali</button>
          <input type="submit" value="{{$button}}" class="btn btn-md btn-info">
          </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_script')
    <script>		
		$('thead').on('click', '#addRow', function(){
			var tr = "<tr>"
						+"<td><input type='text' name='nama_siswa[]' class='form-control' value='''></td>"
						+"<td><input type='text' name='kelas[]' class='form-control' value=''></td>"
						+"<td><a class='btn btn-icon btn-outline-primary btn-sm waves-effect waves-light'id='deleteRow' href='javascript:void(0)'><i class='fadeIn animated fas fa-trash-alt'></i></a></td>"
					+"</tr>"
		$('tbody').append(tr);
		});

		$('tbody').on('click', '#deleteRow', function(){
			$(this).parent().parent().remove();
		});
    </script>
@endsection