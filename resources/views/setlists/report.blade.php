@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12 mt-4">
          <div class="card">
              <div class="card-header text-gray">
                    <div class="d-flex align-items-center">
                        <h2>{{ $data[0]->songlist->name ?? ''}} Report</h2>
                    </div>
              </div>
    <div class="card-body text-secondary">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Singer</th>
                    <th scope="col">Solo</th>
                    <th scope="col">Time</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{ $item->song->name}}</td>
                        <td>{{ $item->song->artist }}</td>
                        <td>{{ $item->song->singer }}</td>
                        <td>{{ $item->song->solo }}</td>
                        <td>{{ $item->song->time }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No Songs found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection