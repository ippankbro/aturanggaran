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
          <h1 class="h2">Selamat datang {{auth()->user()->name}}</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary" id="share">Share</button>
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
          <div class="col-lg-4">
            <h5>Sumber Kas</h5>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th></th>
                  <th>Saldo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Kas Tetta</th>
                  <td>Rp. 1.500.000</td>
                </tr>
                <tr>
                  <th>Kas Bunda</th>
                  <td>Rp. 1.500.000</td>
                </tr>
                <tr>
                  <th>Bank BRI</th>
                  <td>Rp. 1.500.000</td>
                </tr>
                <tr>
                  <th>Bank Mandiri</th>
                  <td>Rp. 1.500.000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-7">
            <h5>Tabel Rencana</h5>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th></th>
                  <th>Pagu</th>
                  <th>Realisasi</th>
                  <th>Sisa</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Pengeluaran Rutin</th>
                  <td>Rp. 2.000.000</td>
                  <td>Rp. 1.200.000</td>
                  <td>Rp. 800.000</td>
                  <td><span class="badge bg-warning text-dark">Warning</span></td>
                </tr>
                <tr>
                  <th>Belanja Harian</th>
                  <td>Rp. 1.600.000</td>
                  <td>Rp. 600.000</td>
                  <td>Rp. 1.000.000</td>
                  <td><span class="badge bg-success">Aman</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Container End -->
        <h2>Section title</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </main>
@endsection