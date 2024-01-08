@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Stmik Mardira</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="matakuliah">Mata kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="prodi" tabindex="-1" aria-disabled="true">Prodi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection
