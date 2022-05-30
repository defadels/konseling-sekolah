@extends('layout.front_layout')

@section('content')
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bimbingan Konseling Karir</h5>
                <hr>
                <form action="{{route($url)}}" method="post">
                    @csrf

                    <div class="form-group">
                        {!! Form::label('nama', 'Nama Siswa') !!}
                        {!! Form::text('nama', old('nama'), ['class' => 'form-control', 'placeholder' => 'Masukkan nama siswa']) !!}
                    
                        @error('nama')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                      </div>

                    <div class="form-group">
                        {!! Form::label('kelas_id', 'Kelas') !!}

                        {!! Form::select('kelas_id', $daftar_kelas, old('kelas_id'), ['placeholder' => '--Pilih kelas--', 'class' => 'form-control']) !!}
                        
                        @error('kelas_id')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        {!! Form::label('nomor_hp','Nomor Telepon') !!}
                        {!! Form::text('nomor_hp', old('nomor_hp'), ['class' => 'form-control', 'placeholder'=>'Masukkan nomor telepon']) !!}
                        
                        @error('nomor_hp')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                      </div>

                    <div class="form-group">
                      {!! Form::label('email', 'Email') !!}

                      {!! Form::email('email', old('email'), ['class' => 'form-control' , 'placeholder' => 'Masukkan email siswa']) !!}
                         
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror

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