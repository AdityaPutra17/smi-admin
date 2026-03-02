@extends('admin.template')

@section('title', 'Submenu Management')

@section('content')

<div class="container mx-auto px-4 ">
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Submenu</h2>
        <a href="{{ route('submenus.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow transition duration-150 ease-in-out transform hover:-translate-y-0.5">
            + Tambah Submenu
        </a>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Menu
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama Menu
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Icon
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Route
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Order
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($submenus as $submenu)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $submenu->menu->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $submenu->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><i class="{{ $submenu->icon }}"></i></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $submenu->route }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $submenu->order }}</td>
                        <td class="d flex px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-3">
                            <a href="{{ route('submenus.edit', $submenu) }}"
                               class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
        
                            <form action="{{ route('submenus.destroy', $submenu) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection