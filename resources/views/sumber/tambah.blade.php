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
   
  </div>

  <!-- Container -->
  <div class="row">

    <div class="col-lg-8">

      <form action="/sumbers" method='post'>
        @csrf
        <div class="form-floating mb-3">
          <input class="form-control @error('nama') is-invalid @enderror" name="nama" id="namasumber " placeholder="Nama Sumber" value="{{old('nama')}}">
          <label for="namasumber">Nama Sumber</label>
          @error('nama')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input class="form-control @error('norek') is-invalid @enderror " name="norek" id="norek" placeholder="Nomor Rekening" value="{{old('norek')}}">
          <label for="norek">Nomor Rekening</label>
          @error('norek')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <select class="form-select @error('user_id') is-invalid @enderror" name="user_id" id="user_id">
            @foreach ($users as $user)
              @if (old('user_id') == $user->id)
               <option value="{{$user->id}}"  selected>{{$user->name}}</option>
              @else
              <option value="{{$user->id}}"  >{{$user->name}}</option>
              @endif
            @endforeach
          </select>
          <label for="user_id">Pemilik</label>
          @error('user_id')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input class="form-control" placeholder="Isi Catatan" name="catatan" id="catatan" value="{{old('catatan')}}"></input>
          <label for="catatan">Catatan</label>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button type="reset" class="btn btn-outline-primary">Reset</button>
        <a class="btn btn-danger" href="/sumbers" role="button">Batal</a>

      </form>
    </div>
  </div>
  <!-- Container End -->

</main>
@endsection