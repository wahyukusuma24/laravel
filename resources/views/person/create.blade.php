@extends('layout/main')

@section('title', 'Form Tambah Data User')

@section('container')
<div class="container">
<div class="row">
<div class="col-8   ">
    <h1 class="mt-3">Form Tambah User</h1>

    <form method="post" action="/person">
    @csrf
  <!-- <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" nama="nama">
  </div> -->
  
  <div class="form-group">
    <label for="email">Nama</label>
    <input type="text" class="form-control" id="email" placeholder="masukan nama" name="email">
  </div>

  <button type="submit" class='btn btn-primary'>Tambah Data</button>
  
</form>

</div>
</div>
</div>
@endsection
