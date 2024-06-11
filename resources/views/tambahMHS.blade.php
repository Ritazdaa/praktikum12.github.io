<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @extends('layout.main')
  @section('container')
  <h3 class="text-center">Tambah data mahasiswa</h3>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 border rounded mt-2 p-3">
      <form action="{{ route('mahasiswa.store') }}" method="POST">
      @csrf
  <div class="mb-3">
    <label for="nim_input" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nimInput" id="nim_input">
  </div>
  <div class="mb-3">
    <label for="nama_input" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama_input" name="namaInput">
  </div>
  <div class="mb-3">
    <label for="prodi_input" class="form-label">Prodi</label>
    <input type="text" class="form-control" id="prodi_input" name="prodiInput">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>
</div>
  @endsection
</body>
</html>