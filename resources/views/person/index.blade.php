@extends('layout/main')

@section('title', 'User')

@section('container')
<div class="container">
<div class="row">
<div class="col-7">
    <h1 class="mt-3">User</h1>
    

  <a href="/person/create" class="btn btn-primary my-4">Tambah Data</a>

  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <ul class="list-group">
    @foreach( $person as $prs )
  <li class="list-group-item d-flex justify-content-between align-items-center">

    {{ $prs->email }}
    <a href="/person/{{ $prs->id }}" class="badge badge-info">detail</a>
  </li>
  @endforeach
</ul>


</div>
</div>
</div>
@endsection
