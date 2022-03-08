@extends('layouts.main')
@section('content')
<div class="p-5 mb-4  rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Rizki Nugraha</h1>
    <p class="col-md-8 fs-4">Tes teknis saya untuk mendaftar ke DesignCub3</p>
    <a class="btn btn-primary btn-lg" href="#tugas">Lihat Tugas</a>
  </div>
</div>

<div class="row align-items-md-stretch" id="tugas">
  <div class="col-md-6">
    <div class="h-100 p-5 text-white bg-dark rounded-3">
      <h2>Tugas 1: Multi-Level Dropdown</h2>
      <p>Indonesia memiliki wilayah administratif yang dibagi mulai dari provinsi kota/kabupaten dan kelurahan. Berikut 4 Level Dropdown yang telah diselesaikan</p>
      <a class="btn btn-outline-light" href="/register">Lihat Tugas</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="h-100 p-5 bg-light border rounded-3">
      <h2>Tugas 2: Simple Webform</h2>
      <p>Form sederhana yang berfungsi sebagai email subscription dan berkomunikasi dengan backend Laravel</p>
      <a class="btn btn-outline-secondary" href="/newsletter">Lihat Tugas</a>
    </div>
  </div>
</div>
@endsection
