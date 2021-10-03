<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    </head>
  
<body class="text-center">    
<main class="form-signin">

  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  
  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  
  <form action="/login" method="POST" class="mb-5">
    @csrf
    <h1 class="h2 mb-5 fw-normal"><b>Klasemen Liga 1</b></h1>
    <div class="form mb-3">

      <input type="text" class="form-control @error('username') is-invalid @enderror"" id="username" name="username" placeholder="username" value="{{ old('username') }}" autofocus required >
      @error('username')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form">
      <input type="password" class="form-control @error('password') is-invalid @enderror"" id="password" name="password" placeholder="password" required>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-lg btn-dark" type="submit">Login</button>
    <a class="btn btn-lg btn-light" type="submit" href="/register">Daftar</a>  
  </form>
  <a class="btn btn-lg btn-dark w-100" type="submit" href="/livescore">LIVE SCORE</a>
</main>
</body>
</html>
