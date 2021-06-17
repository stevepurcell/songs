@extends('layouts.app')

@section('content')
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light"><h3>Edit Setlist</h3></div>
                        <div class="card-body">
                            @livewire('edit-song-lists', ['songlist_id' => $id])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection