@extends('admin.template')

@section('title', 'HR Data')

@section('content')

<div class="p-4">

    <!-- 1. Card Form Tambah Data (Collapsible) -->
    <div class="bg-white shadow rounded-lg mb-6 border border-gray-200">
        <!-- Header Card -->
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center cursor-pointer bg-gray-50 hover:bg-gray-100 transition" onclick="toggleForm()">
            <h3 class="text-lg font-semibold text-gray-700 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                Tambah Karyawan Baru
            </h3>
            <svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>

        <!-- Body Form (Tersembunyi) -->
        <div id="form-container" class="hidden p-6">
            <form action="{{ route('hr.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    
                    <!-- Field Inputs -->
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Emp ID</label>
                        <input type="text" name="emp_id" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50" placeholder="e.g: AC-2600000101">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">NIK Employee</label>
                        <input type="text" name="nik_emp" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama Lengkap</label>
                        <input type="text" name="name" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Company</label>
                        <input type="text" name="company" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Join Date</label>
                        <input type="date" name="join_date" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Division</label>
                        <input type="text" name="division" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Location</label>
                        <input type="text" name="location" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Position</label>
                        <input type="text" name="position" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">No. HP</label>
                        <input type="text" name="no_hp" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Status</label>
                        <select name="status" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Resign">Resign</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Email</label>
                        <input type="email" name="email" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm p-2 border bg-gray-50">
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

    <!-- 2. Tabel Data Karyawan (Tampilan Baru) -->
    <div class="bg-white shadow-lg rounded-lg border border-gray-200 overflow-hidden">
        
        <!-- Header Tabel -->
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
            <h3 class="text-lg font-bold text-gray-800">Daftar Karyawan</h3>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded border border-blue-200">
                Total: {{ count($employees) }} Karyawan
            </span>
        </div>

        <!-- Overflow X untuk Responsif -->
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase font-bold text-xs">
                    <tr>
                        <th class="px-6 py-3">Nama Karyawan</th>
                        <th class="px-6 py-3">Emp ID</th>
                        <th class="px-6 py-3">Nik employee</th>
                        <th class="px-6 py-3">Divisi</th>
                        <th class="px-6 py-3">Position</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($employees as $emp)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        
                        <!-- Nama & Email -->
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $emp->name }}</div>
                            <div class="text-xs text-gray-500">{{ $emp->email }}</div>
                        </td>
                        
                        <!-- ID -->
                        <td class="px-6 py-4">
                            <button onclick="copyToClipboard('{{ $emp->emp_id }}')" 
                                    class="flex items-center space-x-1 text-blue-600 font-mono text-sm hover:text-blue-800 cursor-pointer group transition-colors" 
                                    title="Klik untuk menyalin">
                                <span>{{ $emp->emp_id }}</span>
                                <!-- Ikon Copy (Hanya muncul saat hover) -->
                                <svg class="w-4 h-4 text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button onclick="copyToClipboard('{{ $emp->nik_emp }}')" 
                                    class="flex items-center space-x-1 text-blue-600 font-mono text-sm hover:text-blue-800 cursor-pointer group transition-colors" 
                                    title="Klik untuk menyalin">
                                <span>{{ $emp->nik_emp }}</span>
                                <!-- Ikon Copy (Hanya muncul saat hover) -->
                                <svg class="w-4 h-4 text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </td>
                        
                        <!-- Divisi -->
                        <td class="px-6 py-4 text-gray-500">
                            {{ $emp->division }}
                        </td>

                        <!-- Posisi -->
                        <td class="px-6 py-4 text-gray-500">
                            {{ $emp->position }}
                        </td>

                        <!-- Status Badge -->
                        <td class="px-6 py-4">
                            @if($emp->status == 'Active')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Active
                                </span>
                            @elseif($emp->status == 'Resign')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    Resign
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Inactive
                                </span>
                            @endif
                        </td>

                        <!-- Tombol Aksi -->
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center space-x-2">
                                <!-- Tombol Edit -->
                                <a href="#" class="text-blue-600 hover:text-blue-900 p-1 rounded hover:bg-blue-50" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                
                                <!-- Tombol Delete -->
                                <form action="#" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 p-1 rounded hover:bg-red-50" title="Hapus">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div id="toast" class="fixed bottom-5 right-5 bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg transform transition-all duration-300 opacity-0 translate-y-2 z-50">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-sm font-medium">Emp ID berhasil disalin!</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <p>Belum ada data karyawan.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Script Toggle -->
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

        // Fungsi Copy ke Clipboard
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                // Tampilkan Toast
                const toast = document.getElementById('toast');
                toast.classList.remove('opacity-0', 'translate-y-2');
                
                // Sembunyikan setelah 2 detik
                setTimeout(function() {
                    toast.classList.add('opacity-0', 'translate-y-2');
                }, 2000);
            }, function(err) {
                console.error('Gagal menyalin teks: ', err);
            });
        }
    </script>
</div>

@endsection