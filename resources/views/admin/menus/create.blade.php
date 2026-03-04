@extends('admin.template')

@section('content')

<div class="container mx-auto px-4 py-8">
    <!-- Card Utama -->
    <div class="bg-white rounded-xl shadow-lg border border-gray-100 max-w-2xl mx-auto overflow-hidden">
        
        <!-- Header Form -->
        <div class="bg-gray-50 px-8 py-6 border-b border-gray-200 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Tambah Menu Baru</h2>
                <p class="text-sm text-gray-500 mt-1">Isi detail menu untuk menambahkan ke sistem.</p>
            </div>
            <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                <!-- Ikon SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </div>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('menus.store') }}" class="p-8">
            @csrf

            <!-- Input: Nama Menu -->
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Nama Menu <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </div>
                    <input type="text" id="name" name="name" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 @error('name') border-red-500 @enderror" 
                        placeholder="Contoh: Dashboard, Kelola User" value="{{ old('name') }}">
                </div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input: Urutan -->
            <div class="mb-8">
                <label for="order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Urutan Tampilan
                </label>
                <input type="number" id="order" name="order" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('order') border-red-500 @enderror" 
                    placeholder="1" value="{{ old('order', 0) }}">
                @error('order')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Aksi -->
            <div class="flex items-center justify-end gap-4">
                <a href="{{ route('menus.index') }}" class="text-gray-600 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-300 text-sm font-medium px-5 py-2.5 hover:text-gray-700 focus:ring-gray-400 transition-colors">
                    Batal
                </a>
                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center transition-all shadow-sm hover:shadow-md">
                    Simpan Menu
                </button>
            </div>
        </form>
    </div>
</div>

@endsection