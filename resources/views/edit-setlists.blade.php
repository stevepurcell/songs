@extends('layouts.app')

@section('content')
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light"><h3>Create Setlist</h3></div>
                        <div class="card-body">
                            @livewire('edit-setlists', $listId)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection