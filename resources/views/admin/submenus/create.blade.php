@extends('admin.template')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Submenu</h1>

    <form action="{{ route('submenus.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label>Menu</label>
            <select name="menu_id" class="w-full border p-2 rounded">
                @foreach ($menus as $menu)
                    <option value="{{ $menu->id }}">
                        {{ $menu->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label>Nama</label>
            <input type="text" name="name"
                   class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label>Icon (contoh: fa-solid fa-user)</label>
            <input type="text" name="icon"
                   class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label>Route Name</label>
            <input type="text" name="route"
                   class="w-full border p-2 rounded"
                   placeholder="contoh: hr.index">
        </div>

        <div class="mb-4">
            <label>Order</label>
            <input type="number" name="order"
                   class="w-full border p-2 rounded">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>
</div>
@endsection