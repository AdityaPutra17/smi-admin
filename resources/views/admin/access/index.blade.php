@extends('admin.template')

@section('title', 'HR Data')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
    });
</script>
@endif

@if ($errors->any())
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: `{!! implode('<br>', $errors->all()) !!}`,
    });
</script>
@endif

<div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-10">
    <div class="bg-white shadow rounded-lg mb-6 border border-gray-200">
        <!-- Header Card -->
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center cursor-pointer bg-white hover:bg-gray-100 transition" onclick="toggleForm()">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                Access Management
            </h3>
            <svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>

        <!-- Body Form (Tersembunyi) -->
        <div id="form-container" class="hidden p-6">
            <form action="{{ route('access.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    
                    <div>
                        <label class="block text-xs font-bold uppercase mb-1">Role</label>
                        <select name="role" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                            <option value="" selected disabled>Select Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase mb-1">Menu</label>
                        <select name="menu_id" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                            <option value="" selected disabled>Select Menu</option>
                            @foreach ($menus as $menu)
                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>  
                            @endforeach
                        </select>
                    </div>
                    
                    <!-- Tambahkan field lainnya sesuai kebutuhan -->
                </div>

                <div class="mt-6 flex justify-end border-t pt-4">
                    <button type="button" onclick="toggleForm()" class="mr-2 px-4 py-2 text-sm text-gray-600 hover:text-gray-800">Batal</button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-6 rounded shadow transition">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase font-bold text-xs">
                    <tr>
                        <th class="px-6 py-3">Role</th>
                        <th class="px-6 py-3">Menu Name</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($accesses as $access)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        
                        <td class="px-6 py-4"> {{$access->role}} </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $access->menu->name }}</div>
                        </td>
                        
                        <td class="px-6 py-4">
                            <a href="{{ route('access.edit', $access->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">
                                <i class="fa-solid fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('access.destroy', $access->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this access?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <p>Data Empty.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>   
</div>

<script>
    // Fungsi Toggle Form (Collapsible)
    function toggleForm() {
        const formContainer = document.getElementById('form-container');
        const arrowIcon = document.getElementById('arrow-icon');
        
        if (formContainer.classList.contains('hidden')) {
            formContainer.classList.remove('hidden');
            arrowIcon.classList.add('rotate-180');
        } else {
            formContainer.classList.add('hidden');
            arrowIcon.classList.remove('rotate-180');
        }
    }
</script>
@endsection
