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

      <form action="pendapatans/{{$pendapatan->id}}" method='post'>
        @csrf
        @method('put')
        <div class="form-floating mb-3">
          <select class="form-select @error('sumber_id') is-invalid @enderror" name="sumber_id" id="sumber_id">
            @foreach ($sumbers as $sumber)
              @if (old('sumber_id',$pendapatan->sumber_id) == $sumber->id)
               <option value="{{$sumber->id}}"  selected>{{$sumber->nama}}</option>
              @else
              <option value="{{$sumber->id}}"  >{{$sumber->nama}}</option>
              @endif
            @endforeach
          </select>
          <label for="sumber_id">Sumber</label>
          @error('sumber_id')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>


        <div class="form-floating mb-3">
          <input class="form-control @error('nominal') is-invalid @enderror" name="nominal" id="nominal " placeholder="nominal" value="{{old('nominal',$pendapatan->nominal)}}">
          <label for="nominal">Nominal </label>
          @error('nominal')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="form-floating mb-3">
          <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id">
            @foreach ($kategoris as $kategori)
              @if (old('kategori_id',$pendapatan->kategori_id) == $kategori->id)
               <option value="{{$kategori->id}}"  selected>{{$kategori->nama}}</option>
              @else
              <option value="{{$kategori->id}}"  >{{$kategori->nama}}</option>
              @endif
            @endforeach
          </select>
          <label for="kategori">Kategori</label>
          @error('kategori_id')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>



        <div class="form-floating mb-3">
          <input  class="form-control @error('catatan') is-invalid @enderror" name="catatan" id="catatan " placeholder="catatan" value="{{old('catatan',$pendapatan->catatan)}}">
          <label for="catatan">Catatan </label>
          @error('catatan')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        




        <!-- <div class="row ">
            <div class="col-md-6 form-floating mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-label="First name">
                <label for="password " class="ms-3">Password </label>
            </div>
            <div class="col-md-6 form-floating mb-3">
                <input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Konfirmasi Password" aria-label="Last name">
                <label for="confpassword" class="ms-3">Konfirmasi Password </label>
            </div>
        </div> -->

        <button class="btn btn-primary" type="submit">Simpan</button>
        <button type="reset" class="btn btn-outline-primary">Reset</button>
        <a class="btn btn-danger" href="pendapatans" role="button">Batal</a>

      </form>
    </div>
  </div>
  <!-- Container End -->

</main>
@endsection