<!-- nama : abdulhayyi
    nim : 2210131210015
-->
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
  <h3 class="text-center">Tambah data bandara</h3>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 border border-1 rounded border-black mt-2 p-3">
      <form action="{{ route('databandara.store') }}" method="POST">
      @csrf
  <div class="mb-3">
    <label for="bandara_input" class="form-label">Nama bandara</label>
    <input type="text" class="form-control" name="bandaraInput" id="bandara_input">
  </div>
  <div class="mb-3">
    <label for="provinsi_input" class="form-label">Provinsi</label>
    <input type="text" class="form-control" id="provinsi_input" name="provinsiInput">
  </div>
  <div class="mb-3">
    <label for="kode_input" class="form-label">Kode ICAO</label>
    <input type="text" class="form-control" id="kode_input" name="kodeInput">
  </div>
  <div class="mb-3">
    <label for="panjang_input" class="form-label">Panjang runway</label>
    <input type="text" class="form-control" id="panjang_input" name="panjangInput">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>
</div>
  @endsection
</body>
</html>