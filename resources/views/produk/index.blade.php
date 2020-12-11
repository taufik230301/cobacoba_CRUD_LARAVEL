@extends('layout/main')

@section('title', 'Produk')

@section('container')
    <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Daftar Produk Toko Sayur Mang Ade</h1>
          </div>
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $produk as $prdk )
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$prdk -> nama_produk}}</td>
      <td>{{$prdk -> harga_satuan}}</td>
      <td>{{$prdk -> tanggal}}</td>
      <td>
      <a href="#" class="badge badge-success">edit</a>
      <a href="#" class="badge badge-danger">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
      </div>
@endsection