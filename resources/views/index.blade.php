@extends('layout.front_layout')

@section('content')
<div class="row">
  <div class="col-lg-12">
      <h1>Layanan Bimbingan Konseling</h1>
      <hr>
      <br>
      <div class="jumbotron">
          <h2>Bimbingan Konseling Pribadi</h2>
          <p>Bimbingan langsung saat tatap muka, per individu, dengan bantuan guru ahli untuk membicarakan dan mencari solusi masalah agar perkembangan siswa lebih baik.</p>
          <a class="btn btn-md btn-primary" href="{{route('bimbingan.pribadi')}}" role="button">Pilih layanan &raquo;</a>
        </div>
        <div class="jumbotron">
          <h2>Bimbingan Konseling Karir</h2>
          <p>Layanan yang sangat membantu siswa dalam menguasai sebuah karir, misalnya kompetensi tertentu ataupun kebiasaan yang sangat bermanfaat. Sehingga, menjadi pribadi dengan kemampuan yang lebih baik baik di lingkungan sekolah, masyarakat, dan juga keluarga.</p>
          <a class="btn btn-md btn-primary" href="{{route('bimbingan.karir')}}" role="button">Pilih layanan &raquo;</a>
        </div>
        <div class="jumbotron">
          <h2>Konseling Kelompok</h2>
          <p>Layanan yang membantu para siswa termasuk anggota kelompok supaya mendapatkan peluang pembahasan dan juga pengentasan berbagai masalah pribadi dalam dinamika kelompok. Pembahasan masalah tersebut adalah untuk masalah pribadi yang dialami oleh masing-masing anggota. Layanan tersebut fungsinya adalah pemahaman dan pengembangan siswa. </p>
          <a class="btn btn-md btn-primary" href="{{route('bimbingan.konseling_kelompok')}}" role="button">Pilih layanan &raquo;</a>
        </div>
        <div class="jumbotron">
          <h2>Bimbingan Konseling Kelompok</h2>
          <p>Membantu sejumlah siswa bersama-sama dalam kelompok untuk mendapatkan bahan dan penjelasan tentang pokok bahasan. Tujuannya agar siswa lebih paham dan mampu berkembang secara sosial. Fungsinya adalah untuk pengentasan dan juga advokasi.</p>
          <a class="btn btn-md btn-primary" href="{{route('bimbingan.kelompok')}}" role="button">Pilih layanan &raquo;</a>
        </div>
  </div>     
</div>   
@endsection