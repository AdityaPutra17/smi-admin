@extends('admin.template')

@section('title', 'Menu Management')

@section('content')

<div class="container mx-auto px-4 ">
    <!-- Bagian Atas: Judul dan Tombol Tambah -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Menu</h2>
        <a href="{{ route('menus.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow transition duration-150 ease-in-out transform hover:-translate-y-0.5">
            + Tambah Menu
        </a>
    </div>

    <!-- Container Tabel (Card Style) -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <!-- Header Tabel -->
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama Menu
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Urutan
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                
                <!-- Body Tabel -->
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($menus as $menu)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $menu->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $menu->order }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-3">
                                <!-- Tombol Edit -->
                                <a href="{{ route('menus.edit', $menu) }}" class="text-indigo-600 hover:text-indigo-900 transition duration-150">
                                    Edit
                                </a>
                                
                                <!-- Tombol Delete -->
                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 transition duration-150" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <!-- Menampilkan pesan jika data kosong -->
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-sm text-gray-500">
                                Data menu belum tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection