@extends('layout.main')

@section('header')
@include('partial.header')
@endsection

@section('nav')
@include('partial.nav')
@endsection



@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{$title}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">

        <a class="btn btn-sm btn-outline-primary" href="/kategori-tambah" role="button">Tambah data</a>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div>
  </div>

  <!-- Container -->
  <div class="row px-md-3">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><h6>{{session('success')}}</h6></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>#</th>
          <th>type</th>
          <th>catatan</th>
          <th>aksi</th>
        </tr>
      </thead>
      <tbody class="data-table">
        <!-- @foreach ( $kategoris as $kategori)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$kategori->nama}}</td>
          <td>{{$kategori->type}}</td>
          <td>{{$kategori->catatan}}</td>
          <td>
            <a href="edit-kategori-{{$kategori->id}}" class="badge bg-warning me-3"><span data-feather="edit"></span></a>
            <form action="/kategoris/{{$kategori->id}}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button class="badge bg-danger border-0 btn-sm"><span data-feather="trash-2"></span></button>
            </form>
          </td>
        </tr>
        @endforeach -->
      </tbody>
    </table>
  </div>
  <!-- Container End -->

</main>
@endsection