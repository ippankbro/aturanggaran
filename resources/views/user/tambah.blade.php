

  <!-- Container -->
  <div class="container-fluid border-1">
    <div class="row">

      <div class="col">

        <form action="/users" method='post'>
          @csrf
          <div class="form-floating mb-3">
            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name " placeholder="nama" value="{{old('name')}}">
            <label for="name">Nama </label>
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input type="email" class="form-control @error('name') is-invalid @enderror" name="email" id="email " placeholder="nama" value="{{old('email')}}">
            <label for="email">Email </label>
            @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-label="First name">
              <label for="password " >Password </label>
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

        </form>
      </div>
    </div>
  </div>
  <!-- Container End -->
