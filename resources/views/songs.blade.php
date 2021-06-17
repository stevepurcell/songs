@extends('layouts.app')

@section('content')
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @livewire('songs')
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
