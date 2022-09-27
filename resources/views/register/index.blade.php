<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }} ">

    {{-- Bootsrap Picker --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    </head>
  <body>
    <div class="form">
      <form method="POST" action="/register">
        @csrf
          <div class="form-signin m-auto">
              <h1 class="h3 mb-3 fw-bold text-light text-center mb-3">REGISTER</h1>
      
              <div class="form-input mb-2">
                  <label class="text-light mb-2"><i class="bi bi-envelope"></i> Email</label>
                  <input type="text" class="form-control @error('email')is-invalid @enderror" id="floatingInput" name="email" placeholder="Enter Email" required value="{{ old('email') }}" autocomplete="off">

                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-input mb-2">
                  <label class="text-light mb-2"><i class="bi bi-person-circle"></i> Username</label>
                  <input type="text" class="form-control @error('username')is-invalid @enderror" id="floatingInput" name="username" placeholder="Enter Username" required value="{{ old('username') }}" autocomplete="off">

                  @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-input mb-2">
                  <label class="text-light mb-2"><i class="bi bi-telephone"></i> No Hp</label>
                  <input type="number" class="form-control @error('nomer')is-invalid @enderror" id="floatingInput" name="nomer" placeholder="Enter No Hp" required value="{{ old('nomer') }}" autocomplete="off" pattern="(\+62|62|0)8[1-9][0-9]{6,12}$">

                  @error('nomer')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-input mb-2">
                  <label class="text-light mb-2"> <i class="bi bi-file-lock2"></i> Password</label>
                  <input type="password" class="form-control @error('password')is-invalid @enderror" id="floatingPassword" name="password" placeholder="Enter Password" required>

                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              {{-- <div class="row form-group mb-4">
                <label class="text-light mb-2"><i class="bi bi-calendar"></i> Tanggal</label>
                <div class="col-sm-12">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" placeholder="Enter Date">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div> --}}
              <div class="row form-group mb-4">
                <label class="text-light mb-2"><i class="bi bi-calendar"></i> Tanggal</label>
                <div class="col-sm-12">
                        <input type="datetime-local" class="form-control" placeholder="Enter Date">
                </div>
            </div>
            <script type="text/javascript">
              $(function() {
                  $('#datepicker').datepicker();
              });
            </script>      
              <button class="w-100 btn btn-lg btn-primary">Register</button>
          </div>
        </form>
        <p class="text-center text-white">Have a account? <a href="/" class="text-light">Login Here</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>