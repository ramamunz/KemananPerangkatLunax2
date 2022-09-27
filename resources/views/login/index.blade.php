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
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }} ">
  </head>
  <body>
    <div class="form">
      <form method="POST" action="/login">
        @csrf

          <div class="form-signin m-auto">
            {{-- Alert --}}
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{-- End Alert --}}

            {{-- Alert --}}
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{-- End Alert --}}

              <h1 class="h3 mb-3 fw-bold text-light text-center mb-3">LOGIN</h1>
      
              <div class="form-input mb-3">
                  <label class="text-light mb-2"><i class="bi bi-envelope"></i> Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="Enter Email" required value="{{ old('email') }}" autocomplete="off">
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-input mb-3">
                  <label class="text-light mb-2"> <i class="bi bi-file-lock2"></i> Password</label>
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Enter Password" required>
              </div>
              <button class="w-100 btn btn-lg btn-primary">Login</button>
          </div>
        </form>
        <p class="text-center text-white">Don't have a account yet? <a href="/register" class="text-light">Sign Up</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>