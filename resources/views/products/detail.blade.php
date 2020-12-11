@extends('layout/main')

@section('title', 'Detail Produk')

@section('container')
    <div class="container">
        <div class="row">
          <div class="col-6">
            <h1>Detail Produk</h1>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product->nama_produk}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$product->harga_satuan}}</h6>
                <p class="card-text">{{$product->created_at}}</p>

                <a href="{{ $product->id }}/edit" class="btn btn-primary">Edit</a>

                <form action="/products/{{ $product->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                <a href="/products" class="card-link">Kembali</a>
            </div>
            </div>
          </div>
        </div>
      </div>
@endsection