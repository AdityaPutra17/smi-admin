@extends('admin.template')

@section('content')

<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-xl font-bold mb-4">Add Menu</h1>
    <form method="POST" action="{{ route('menus.store') }}">
    @csrf

        <label>Nama Menu</label>
        <input type="text" name="name">

        <label>Icon</label>
        <input type="text" name="icon">

        <label>Order</label>
        <input type="number" name="order">

        <button type="submit">Simpan</button>
    </form>

</div>

@endsection