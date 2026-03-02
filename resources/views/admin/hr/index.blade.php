@extends('admin.template')

@section('content')

<div class="p-4">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">HR Data</h2>
        <a href="{{ route('hr.create') }}"
           class="bg-blue-500 text-white px-4 py-2 rounded">+ Add</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Route</th>
                    <th class="px-6 py-3">Parent</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($employees as $emp)
                    <tr>
                        <td class="px-6 py-4 font-medium">{{ $emp->name }}</td>
                        <td class="px-6 py-4">{{ $emp->emp_id }}</td>
                        <td class="px-6 py-4">Main Menu</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs rounded 
                                {{ $menu->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ $menu->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Belum ada menu
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection