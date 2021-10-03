@extends('dashboard/layouts/main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h3">Halaman Club</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="table-responsive col-lg-8">
            <a href="/clubs/create" class="btn btn-success mb-3">Tambah Club</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Club</th>
              <th scope="col">Logo</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clubs as $club)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $club->club_name }}</td>
              <td><img src="{{ asset('storage/'. $club->logo) }}" alt="{{ $club->club_name }}" style="width:30px; height:30px;"></td>
              <td>
                <a href="/clubs/{{ $club->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/clubs/{{ $club->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin hapus {{ $club->club_name }}?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </main>
@endsection