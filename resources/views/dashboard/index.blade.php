@extends('dashboard/layouts/main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h3">Selamat Datang, {{ auth()->user()->firstname }}</h1>
    </div>
    <div class="table-responsive col-lg-8">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Klub</th>
            <th scope="col">Main</th>
            <th scope="col">Menang</th>
            <th scope="col">Seri</th>
            <th scope="col">Kalah</th>
            <th scope="col">GM</th>
            <th scope="col">GK</th>
            <th scope="col">Poin</th>
            <th scope="col">Last Match</th>
            <th scope="col">Performa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($scores as $score)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{ asset('storage/'. $score->logo) }}" style="width:30px; height:30px;">
            {{ $score->club_name }}
            </td>
            <td>{{ $score->total_main }}</td>
            <td>{{ $score->total_menang }}</td>
            <td>{{ $score->total_seri }}</td>
            <td>{{ $score->total_kalah }}</td>
            <td>{{ $score->total_gm }}</td>
            <td>{{ $score->total_gk }}</td>
            <td>{{ $score->total_poin }}</td>
          @if ($score->menang == 1)
            <td>+3</td>
          
          @endif
          @if ($score->kalah == 1)
            <td>0</td>
             
          @endif
          @if ($score->seri == 1)
            <td>+1</td>
             
          @endif
          
          <td>
            <div class="d-flex">
            @foreach ($results as $result)
              @if ($result->club_id == $score->club_id)
              @if ($result->menang == 1)  
                <div class="px-1">M</div>
              @endif
              @if ($result->seri == 1)  
              <div class="px-1">S</div>
              @endif
              @if ($result->kalah == 1)  
              <div class="px-1">K</div>
              @endif
              @endif
              @endforeach
            </div>
          </td>
     
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection