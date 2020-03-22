@extends('layout/main')

@section('title', 'Detail User')

@section('container')
<div class="container">
<div class="row">
<div class="col-7">
    <h1 class="mt-3">Detail User</h1>

    <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$person->nama}}</h5>
    <p class="card-text">{{$person->email}}</p>

    <a href="{{ $person-> id }}/edit" class="btn btn-primary">Edit</a>
    <form action="{{ $person->id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/person" class="card-link">kembali</a>
  </div>
</div>

</div>
</div>
</div>
@endsection
