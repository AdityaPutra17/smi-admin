@extends('admin.template')

@section('content')

<form action="{{ route('menus.update', $menu->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Menu</label>
        <input type="text" name="name" value="{{ old('name', $menu->name) }}">
    </div>

    <div>
        <label>Icon</label>
        <input type="text" name="icon" value="{{ old('icon', $menu->icon) }}">
    </div>

    <div>
        <label>Order</label>
        <input type="number" name="order" value="{{ old('order', $menu->order) }}">
    </div>

    <button type="submit">Update</button>
</form>

@endsection