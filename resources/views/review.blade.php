@extends('layouts.main')
@section('container')
<body>
    <h1>Manga</h1>
    <a class="btn btn-info" href="/addreview" role="button">Add Review</a>
    @foreach ($barang as $key => $item)
    <div class="card text-center">
       
        <div class="card-body"><div class="card text-center" style="width: 18rem;">
            <img src="{{ asset('images') }}/{{ $item->foto }}" class="card-img-top" alt="{{ $item->foto }}">
            <div class="card-body">
           
          <h5 class="card-title">{{ $item->nama_barang }}</h5>
          <p class="card-text">{{ $item->isi }}</p>
        </div>
      </div>
    @endforeach
</body>
@endsection