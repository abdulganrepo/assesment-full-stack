@extends('dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h3">Tambah Club</h1>
    </div>
    <div class="col-lg-5">
    <form action="/clubs" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="club_name" class="form-label">Nama Club</label>
          <input type="text" class="form-control @error('club_name') is-invalid @enderror" id="club_name" name="club_name" placeholder="nama club..." value="{{ old('club_name') }}" required autofocus>
          @error('club_name')
         <div div class="invalid-feedback">{{ $message }}</div>
         @enderror
        </div>
        <div class="mb-3">
          <label for="logo" class="form-label">Upload Logo</label>
          <img class="img-preview img-fluid mb-5 col-sm-3">
          <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo" onchange="previewImage()">
          @error('logo')
          <div div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
</main>
    
<script>

function previewImage(){

  const image = document.querySelector('#logo');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent){
    imgPreview.src = oFREvent.target.result;
  }

}

</script>
@endsection