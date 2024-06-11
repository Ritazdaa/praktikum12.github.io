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
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<a href="{{route('databandara.create')}}" class="btn btn-primary mt-5">Tambah data</a>
<table class="table table-bordered mt-3 table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama bandara</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Kode ICAO</th>
      <th scope="col">Panjang runway</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach ($databandara as $item)
    <tr>
      <th>{{ $no }}</th>
      <td>{{$item->nama_bandara}}</td>
      <td>{{$item->provinsi}}</td>
      <td>{{$item->kode_icao}}</td>
      <td>{{$item->panjang_runway}}</td>
      <td>
        <a href="{{route ('databandara.edit', $item->id)}}" class="btn btn-warning m-2 btn-sm"><i class="fas fa-edit"></i> Edit</a>
        <!-- <a href="" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a> -->
        <form action = "{{ route('databandara.destroy', $item->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"><i class="fa fa-trash" onclick="confirm('Apakah anda ingin menghapus data ini?')"></i> Hapus</button>
</form>
      </td>
    </tr>

  @php
    $no++;
  @endphp
  @endforeach
</tbody>
</table>
@endsection
</body>
</html>