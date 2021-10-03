@extends('dashboard/layouts/main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h3">Halaman Pertandingan</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <form action="/scores" method="POST">
        @csrf
        <div class="form-row mb-5">
          <div class="col-md-2">
            <select class="form-select" name="club_id">
                @foreach ($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->club_name}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-2">
            <input type="text" name="gm" id="gm" class="form-control @error('gm') is-invalid @enderror" placeholder="GM" required>
            @error('gm')
            <div div class="invalid-feedback">{{ $message }}</div>
            @enderror  
        </div>
          <div class="col-md-2">
            <input type="text" name="gk" id="gk" class="form-control @error('gk') is-invalid @enderror" placeholder="GK" required>
            @error('gk')
            <div div class="invalid-feedback">{{ $message }}</div>
            @enderror  
        </div>
          <button type="submit" class="btn btn-info">Tambah Score</button>
        </div>
      </form>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Logo</th>
              <th scope="col">Klub</th>
              <th scope="col">Hasil</th>
              <th scope="col">GM</th>
              <th scope="col">GK</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($scores as $score)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><img src="{{ asset('storage/'. $score->club->logo) }}" alt="{{ $score->club->club_name }}" style="width:30px; height:30px;"></td>
              <td>{{ $score->club->club_name }}</td>
              @if ($score->menang == 1)
                <td>Menang</td>
              
              @endif
              @if ($score->kalah == 1)
                <td>Kalah</td>
                 
              @endif
              @if ($score->seri == 1)
                <td>Seri</td>
                 
              @endif

              <td>{{ $score->gm }}</td>
              <td>{{ $score->gk }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </main>
@endsection