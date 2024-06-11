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
<a href="{{route('mahasiswa.create')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah data</a>
<table class="table table-bordered mt-2 table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach ($mahasiswa as $item)
    <tr>
      <th>{{ $no }}</th>
      <td>{{$item->nim}}</td>
      <td>{{$item->nama}}</td>
      <td>{{$item->prodi}}</td>
      <td>
        <a href="{{route ('mahasiswa.edit', $item->id)}}" class="btn btn-primary m-2"><i class="fas fa-edit"></i> Edit</a>
        <!-- <a href="" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a> -->
        <form action = "{{ route('mahasiswa.destroy', $item->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
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