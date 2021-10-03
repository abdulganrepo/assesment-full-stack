<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    </head>
  
<body class="text-center">    
<main class="form-signin">
  <form action="/register" method="POST">
    @csrf
    <h1 class="h2 mb-5 fw-normal"><b>Registrasi</b></h1>
    <div class="form mb-3">
      <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="firstname" required value="{{ old('firstname') }}" autofocus>
        @error('firstname')
        <div div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form mb-3">
      <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="lastname" required value="{{ old('lastname') }}">
        @error('lastname')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form mb-3">
        <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" required value="{{ old('username') }}"> 
        @error('username')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" required value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form mb-3">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password" required>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form mb-3">
        <input type="password" class="form-control @error('confirm') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="confirm password" required>
        @error('confirm')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    <button class="btn btn-lg btn-dark w-100" type="submit">Daftar</button>
</form>
<small>Sudah punya akun? <a href="/">LOGIN</a></small>
</main>
</body>
</html>
