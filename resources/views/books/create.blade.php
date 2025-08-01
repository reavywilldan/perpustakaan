@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Buku Baru</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">Penulis:</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah:</label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection