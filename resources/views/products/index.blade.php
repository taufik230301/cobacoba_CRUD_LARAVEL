@extends('layout/main')

@section('title', 'Produk')

@section('container')
    <div class="container">
        <div class="row">
          <div class="col-6">
            <h1>Produk Uglykultur</h1>

            <a href="/products/create" class="btn btn-primary my-3">Tambah Data Produk</a>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if (session('status_delete'))
                <div class="alert alert-danger">
                    {{ session('status_delete') }}
                </div>
            @endif

            <ul class="list-group">
        
            @foreach($products as $product)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$product->nama_produk}}
            <a href="/products/{{$product->id}}" class="badge badge-info">detail</a>
        </li>
            @endforeach
                </ul>
          </div>
             
        </div>
      </div>
@endsection