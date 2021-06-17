@extends('layouts.app')

@section('content')
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @livewire('sort-setlists', ['setlistid' => $id])        
            </div>
    </main>
</div>
@endsection