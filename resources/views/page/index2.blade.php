@extends('index')
@section('content')
    <div class="container py-5">
  <div class="row align-items-center">
    <!-- Kolom kiri (teks) -->
    <div class="col-md-6">
      <h1 class="fw-bold">SOLUSI KESEHATAN<br>ANJING ANDA</h1>
      <h5 class="text-danger fw-bold mt-3">LAYANAN CEPAT DAN TEPAT</h5>
      <p class="mt-3">
        Kami hadir untuk membantu Anda merawat anjing kesayangan dengan informasi terpercaya
        tentang kesehatan, nutrisi, dan perawatan terbaik. Temukan panduan lengkap agar sahabat
        berbulu Anda tetap sehat, bahagia, dan aktif setiap hari!
      </p>
      <a href="{{route('diagnosa')}}" class="btn btn-danger btn-lg mt-3">Konsultasi Sekarang</a>
    </div>

    <!-- Kolom kanan (gambar) -->
    <div class="col-md-6 text-center">
      <img src="{{ asset('assets/img/dokter-anjing.jpg') }}" alt="Dokter Hewan dan Anjing" class="img-fluid rounded">
    </div>
  </div>
</div>


@endsection
