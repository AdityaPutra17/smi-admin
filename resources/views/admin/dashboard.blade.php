@extends('admin.template')

@section('title', 'Dashboard')

@section('content')
<div class="p-6 ml-64"> {{-- kasih margin karena sidebar fixed --}}
    <h1 class="text-2xl font-semibold">Dashboard</h1>
    <p class="text-gray-500">Welcome, {{ auth()->user()->name }}</p>
</div>
@endsection
