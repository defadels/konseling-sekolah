@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil Saya') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <h5>NIS :</h5>
                        <p>{{Auth::user()->nis}}</p>
                    </div>
                    
                    <div class="form-group">
                        <h5>Nama :</h5>
                        <p>{{Auth::user()->nama}}</p>
                    </div>
                    
                    <div class="form-group">
                        <h5>Tempat/Tanggal Lahir :</h5>
                        <p>{{Auth::user()->tempat_lahir}}/{{Auth::user()->tanggal_lahir}}</p>
                    </div>

                    <div class="form-group">
                        <h5>Agama :</h5>
                        <p>{{Auth::user()->agama}}</p>
                    </div>
                    
                    <div class="form-group">
                        <h5>Jenis Kelamin :</h5>
                        <p>{{Auth::user()->jenis_kelamin}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection