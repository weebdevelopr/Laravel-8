@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
         @endauth

    </div>
@endsection
