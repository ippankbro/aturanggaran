<!-- index Form user -->

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
    <!-- <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">

        <a class="btn btn-sm btn-outline-primary" href="/user-tambah" role="button">Tambah data</a>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div> -->
    @include('partial.toolbar')
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
          <th>Nama</th>
          <th>email</th>
          <th>aksi</th>
        </tr>
      </thead>
      <tbody class="data-table">
        <!-- @foreach ( $users as $user)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>check</td>
          <td>
            <a href="edit-user-{{$user->id}}" class="badge bg-warning me-3"><span data-feather="edit"></span></a>
            <form action="/users/{{$user->id}}" method="post" class="d-inline">
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


  <div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="addmodalLable" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addmodalLable">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('user.tambah')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn-simpan btn btn-primary">simpan</button>
      </div>
    </div>
  </div>
</div>



</main>
@endsection