@extends('layout/main')

@section('title', 'Ubah Data Produk')

@section('container')
    <div class="container">
        <div class="row">
          <div class="col-6">
            <h1>Ubah Data Produk</h1>
            <form method="post" action="/products/{{$product->id}}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" placeholder="Masukan nama produk" name="nama_produk" value="{{ $product->nama_produk }}">
               @error('nama_produk')
               <div id="validationServer04Feedback" class="invalid-feedback">
                 {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga_satuan">Nama Produk</label>
                <input type="text" class="form-control @error('harga_satuan') is-invalid @enderror" id="harga_satuan" placeholder="Masukan nama produk" name="harga_satuan" value="{{ $product->harga_satuan }}">
               @error('harga_satuan')
               <div id="validationServer04Feedback" class="invalid-feedback">
                 {{$message}}
                </div>
                @enderror
            </div>
            <!-- <div class="form-group">
                <label for="harga_satuan">Harga Satuan</label>
                <input type="text" class="form-control" id="harga_satuan" placeholder="Masukan Harga Satuan" name="harga_satuan">
            </div> -->
            <button type="submit" class="btn btn-primary">Ubah Data!</button>
            </form>
          </div>
        </div>
      </div>
@endsection