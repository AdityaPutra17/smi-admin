{{-- @extends('admin.template')

@section('title', 'Dashboard')

@section('content')

<body class="bg-gradient-to-br from-slate-50 to-indigo-100 min-h-screen z-0">
   
    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Hero Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Total Users -->
            <div class="group bg-white/70 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-white/50 animate-count-up">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-600 mb-1">Total Pengguna</p>
                        <p class="text-4xl font-bold bg-gradient-to-r from-indigo-600 to-purple-700 bg-clip-text text-transparent">12,456</p>
                    </div>
                    <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <i class="fas fa-arrow-up text-emerald-500 mr-1"></i>
                    <span class="font-semibold text-emerald-600">+18% dari bulan lalu</span>
                </div>
            </div>

            <!-- Total Orders -->
            <div class="group bg-white/70 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-white/50 animate-count-up">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-600 mb-1">Pesanan Hari Ini</p>
                        <p class="text-4xl font-bold bg-gradient-to-r from-pink-500 to-rose-500 bg-clip-text text-transparent">1,234</p>
                    </div>
                    <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <i class="fas fa-shopping-cart text-2xl text-white"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <i class="fas fa-arrow-up text-emerald-500 mr-1"></i>
                    <span class="font-semibold text-emerald-600">+25% dari kemarin</span>
                </div>
            </div>

            <!-- Revenue -->
            <div class="group bg-white/70 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-white/50 animate-count-up">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-600 mb-1">Pendapatan Bulan</p>
                        <p class="text-4xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">Rp 457M</p>
                    </div>
                    <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <i class="fas fa-coins text-2xl text-white"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <i class="fas fa-arrow-up text-emerald-500 mr-1"></i>
                    <span class="font-semibold text-emerald-600">+32% YoY</span>
                </div>
            </div>

            <!-- Products -->
            <div class="group bg-white/70 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-white/50 animate-count-up">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-600 mb-1">Total Produk</p>
                        <p class="text-4xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">2,567</p>
                    </div>
                    <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <i class="fas fa-boxes text-2xl text-white"></i>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <i class="fas fa-arrow-up text-emerald-500 mr-1"></i>
                    <span class="font-semibold text-emerald-600">+12% MoM</span>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activity -->
            <div class="lg:col-span-2">
                <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-xl border border-white/50 p-8">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-slate-700 bg-clip-text text-transparent">Aktivitas Terbaru</h2>
                        <button class="px-6 py-2.5 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-2xl hover:from-indigo-600 hover:to-purple-700 shadow-lg hover:shadow-xl transition-all duration-200">
                            Lihat Semua
                        </button>
                    </div>

                    <div class="space-y-4 max-h-96 overflow-y-auto">
                        <!-- Activity Item 1 -->
                        <div class="group flex items-start space-x-4 p-4 hover:bg-slate-50/50 rounded-2xl transition-all duration-200 cursor-pointer border border-slate-100/50 hover:border-indigo-200">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-105 transition-transform">
                                <i class="fas fa-user-plus text-white text-xl"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-slate-800 mb-1 truncate">Pengguna Baru: john_doe123</h4>
                                <p class="text-sm text-slate-600 mb-2">Bergabung sebagai member baru dengan email verification</p>
                                <div class="flex items-center text-xs text-emerald-600 font-medium">
                                    <i class="fas fa-clock mr-1"></i>
                                    5 menit yang lalu
                                </div>
                            </div>
                        </div>

                        <!-- Activity Item 2 -->
                        <div class="group flex items-start space-x-4 p-4 hover:bg-slate-50/50 rounded-2xl transition-all duration-200 cursor-pointer border border-slate-100/50 hover:border-emerald-200">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-105 transition-transform">
                                <i class="fas fa-truck text-white text-xl"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-slate-800 mb-1 truncate">Pesanan Dikirim #ORD-2024-00147</h4>
                                <p class="text-sm text-slate-600 mb-2">Pesanan berhasil dikirim ke customer</p>
                                <div class="flex items-center text-xs text-emerald-600 font-medium">
                                    <i class="fas fa-clock mr-1"></i>
                                    23 menit yang lalu
                                </div>
                            </div>
                        </div>

                        <!-- Activity Item 3 -->
                        <div class="group flex items-start space-x-4 p-4 hover:bg-slate-50/50 rounded-2xl transition-all duration-200 cursor-pointer border border-slate-100/50 hover:border-amber-200">
                            <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-orange-500 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-105 transition-transform">
                                <i class="fas fa-pause text-white text-xl"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-slate-800 mb-1 truncate">Pesanan Ditunda #ORD-2024-00148</h4>
                                <p class="text-sm text-slate-600 mb-2">Menunggu konfirmasi pembayaran</p>
                                <div class="flex items-center text-xs text-amber-600 font-medium">
                                    <i class="fas fa-clock mr-1"></i>
                                    1 jam yang lalu
                                </div>
                            </div>
                        </div>

                        <!-- Add more activity items... -->
                    </div>
                </div>
            </div>

            <!-- Quick Stats & Chart Placeholder -->
            <div class="space-y-6">
                <!-- Performance Metrics -->
                <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-xl border border-white/50 p-8">
                    <h3 class="text-xl font-bold bg-gradient-to-r from-gray-800 to-slate-700 bg-clip-text text-transparent mb-6">Metrik Utama</h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-emerald-50 to-emerald-100 rounded-2xl">
                            <div>
                                <p class="text-sm text-emerald-700 font-medium">Tingkat Kepuasan</p>
                                <p class="text-2xl font-bold text-emerald-800">98.7%</p>
                            </div>
                            <i class="fas fa-star text-2xl text-emerald-500"></i>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-sky-50 to-sky-100 rounded-2xl">
                            <div>
                                <p class="text-sm text-sky-700 font-medium">Pesanan On-Time</p>
                                <p class="text-2xl font-bold text-sky-800">95.2%</p>
                            </div>
                            <i class="fas fa-clock text-2xl text-sky-500"></i>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-rose-50 to-rose-100 rounded-2xl">
                            <div>
                                <p class="text-sm text-rose-700 font-medium">Return Rate</p>
                                <p class="text-2xl font-bold text-rose-800">1.8%</p>
                            </div>
                            <i class="fas fa-undo text-2xl text-rose-500"></i>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-xl border border-white/50 p-8">
                    <h3 class="text-xl font-bold bg-gradient-to-r from-gray-800 to-slate-700 bg-clip-text text-transparent mb-6">Aksi Cepat</h3>
                    <div class="space-y-3">
                        <button class="w-full flex items-center justify-center space-x-3 px-4 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200">
                            <i class="fas fa-plus"></i>
                            <span>Tambah Produk</span>
                        </button>
                        <button class="w-full flex items-center justify-center space-x-3 px-4 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-semibold rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200">
                            <i class="fas fa-users-cog"></i>
                            <span>Kelola Pengguna</span>
                        </button>
                        <button class="w-full flex items-center justify-center space-x-3 px-4 py-3 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white font-semibold rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200">
                            <i class="fas fa-chart-line"></i>
                            <span>Lihat Laporan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

 --}}

@extends('admin.template')

@section('title', 'Dashboard')

@section('content')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8'
                        }
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">

    <div class="max-w-7xl mx-auto px-6 ">
        <!-- KPI Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Total Employees -->
            <div class="group bg-white/80 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 border border-blue-100/50 transition-all duration-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-lg group-hover:scale-105 transition-transform">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide">Karyawan Aktif</p>
                    </div>
                </div>
                <div class="text-4xl font-black text-blue-600 mb-2" data-target="1245">0</div>
                <div class="flex items-center text-sm text-emerald-600 font-semibold">
                    <i class="fas fa-arrow-up mr-1"></i>
                    +2.3% bulan ini
                </div>
            </div>

            <!-- New Hires -->
            <div class="group bg-white/80 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 border border-emerald-100/50 transition-all duration-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl shadow-lg group-hover:scale-105 transition-transform">
                        <i class="fas fa-user-plus text-2xl text-white"></i>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide">Karyawan Baru</p>
                    </div>
                </div>
                <div class="text-4xl font-black text-emerald-600 mb-2" data-target="23">0</div>
                <div class="flex items-center text-sm text-emerald-600 font-semibold">
                    <i class="fas fa-arrow-up mr-1"></i>
                    +15% dari bulan lalu
                </div>
            </div>

            <!-- Turnover Rate -->
            <div class="group bg-white/80 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 border border-orange-100/50 transition-all duration-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl shadow-lg group-hover:scale-105 transition-transform">
                        <i class="fas fa-user-times text-2xl text-white"></i>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide">Turnover Rate</p>
                    </div>
                </div>
                <div class="text-4xl font-black text-orange-600 mb-2" data-target="4.2">0</div>
                <div class="flex items-center text-sm text-emerald-600 font-semibold">
                    <i class="fas fa-arrow-down mr-1"></i>
                    -0.8% bulan ini
                </div>
            </div>

            <!-- Open Positions -->
            <div class="group bg-white/80 backdrop-blur-md rounded-3xl p-8 shadow-xl hover:shadow-2xl hover:-translate-y-2 border border-purple-100/50 transition-all duration-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl shadow-lg group-hover:scale-105 transition-transform">
                        <i class="fas fa-briefcase text-2xl text-white"></i>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide">Lowongan Terbuka</p>
                    </div>
                </div>
                <div class="text-4xl font-black text-purple-600 mb-2" data-target="7">0</div>
                <div class="flex items-center text-sm text-orange-600 font-semibold">
                    <i class="fas fa-exclamation-triangle mr-1"></i>
                    Perlu diisi segera
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 mb-10">
            <!-- Recent Employees & Activities -->
            <div class="xl:col-span-2 space-y-8">
                <!-- Recent Employees -->
                <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl border border-blue-100/50 p-8">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-black bg-gradient-to-r from-gray-900 to-slate-700 bg-clip-text text-transparent">
                            Karyawan Terbaru
                        </h2>
                        <div class="flex items-center space-x-2 text-sm text-slate-500">
                            <i class="fas fa-calendar-day"></i>
                            <span>30 hari terakhir</span>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="group flex items-center p-5 hover:bg-blue-50/50 rounded-2xl transition-all duration-300 border border-blue-100/50 hover:border-blue-200 cursor-pointer">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg shadow-lg mr-4 flex-shrink-0">
                                BD
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-slate-800 mb-1">Budi Darmawan</h4>
                                <p class="text-sm text-slate-600 mb-2">Software Developer • IT Department</p>
                                <div class="flex items-center text-xs text-emerald-600 bg-emerald-100 px-3 py-1 rounded-full font-medium">
                                    <i class="fas fa-check mr-1"></i>
                                    Onboarding Selesai
                                </div>
                            </div>
                            <div class="text-right ml-4">
                                <div class="text-2xl font-bold text-emerald-600">IDR 8.5M</div>
                                <div class="text-xs text-slate-500">Gaji Bulanan</div>
                            </div>
                        </div>

                        <div class="group flex items-center p-5 hover:bg-emerald-50/50 rounded-2xl transition-all duration-300 border border-emerald-100/50 hover:border-emerald-200 cursor-pointer">
                            <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg shadow-lg mr-4 flex-shrink-0">
                                SS
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-slate-800 mb-1">Sari Santoso</h4>
                                <p class="text-sm text-slate-600 mb-2">HR Specialist • Human Resources</p>
                                <div class="flex items-center text-xs text-blue-600 bg-blue-100 px-3 py-1 rounded-full font-medium">
                                    <i class="fas fa-clock mr-1"></i>
                                    Probation Period
                                </div>
                            </div>
                            <div class="text-right ml-4">
                                <div class="text-2xl font-bold text-emerald-600">IDR 7.2M</div>
                                <div class="text-xs text-slate-500">Gaji Bulanan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl border border-blue-100/50 p-8">
                    <h2 class="text-2xl font-black bg-gradient-to-r from-gray-900 to-slate-700 bg-clip-text text-transparent mb-8">
                        Aktivitas HR
                    </h2>
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        <div class="flex items-start space-x-4 p-4 hover:bg-slate-50 rounded-xl transition-colors">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-file-signature text-blue-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-800">Kontrak Budi Darmawan diperbarui</h4>
                                <p class="text-sm text-slate-600">Status: Disetujui oleh Direktur • 2 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 p-4 hover:bg-slate-50 rounded-xl transition-colors">
                            <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-thumbs-up text-emerald-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-800">Sari Santoso lulus probation</h4>
                                <p class="text-sm text-slate-600">Status: Permanen • 4 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 p-4 hover:bg-slate-50 rounded-xl transition-colors">
                            <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-exclamation-triangle text-orange-600 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-800">Pengajuan cuti Ahmad R. tertunda</h4>
                                <p class="text-sm text-slate-600">Menunggu approval manager • 6 jam yang lalu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats & Actions -->
            <div class="space-y-8">
                <!-- Employee Status -->
                <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl border border-blue-100/50 p-8 sticky top-8">
                    <h3 class="text-xl font-black bg-gradient-to-r from-gray-900 to-slate-700 bg-clip-text text-transparent mb-6">
                        Status Karyawan
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl">
                            <span class="text-sm font-semibold text-slate-700">Permanen</span>
                            <div class="text-2xl font-black text-blue-600">1,045</div>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-2xl">
                            <span class="text-sm font-semibold text-slate-700">Kontrak</span>
                            <div class="text-2xl font-black text-emerald-600">156</div>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl">
                            <span class="text-sm font-semibold text-slate-700">Probation</span>
                            <div class="text-2xl font-black text-purple-600">44</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('[data-target]');
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.target);
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target.toLocaleString('id-ID');
                        return;
                    }
                    counter.textContent = Math.floor(current).toLocaleString('id-ID');
                    requestAnimationFrame(updateCounter);
                };
                updateCounter();
            });
        }

        // Intersection Observer
                // Intersection Observer untuk animasi
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'countUp 1.5s ease-out forwards';
                    if (entry.target.querySelector('[data-target]')) {
                        setTimeout(animateCounters, 200);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe semua cards
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.group, [class*="backdrop-blur"]').forEach(el => {
                observer.observe(el);
            });

            // Notification dropdown toggle
            const notifBtn = document.querySelector('.fa-bell').closest('div');
            notifBtn.addEventListener('click', function() {
                // Simulate notification dropdown
                const notifCount = this.querySelector('.w-6');
                notifCount.textContent = parseInt(notifCount.textContent) - 1;
                if (parseInt(notifCount.textContent) === 0) {
                    notifCount.style.display = 'none';
                }
            });

            // Profile dropdown toggle
            const profileBtn = document.querySelector('.fa-chevron-down').closest('div');
            profileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                // Add dropdown logic here
            });

            // Search focus effect
            const searchInput = document.querySelector('input[placeholder*="Cari"]');
            if (searchInput) {
                searchInput.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-4', 'ring-blue-200');
                });
                searchInput.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-4', 'ring-blue-200');
                });
            }
        });

        // Custom CSS untuk animasi (inline)
        const style = document.createElement('style');
        style.textContent = `
            @keyframes countUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .group:hover .group-hover\\:scale-105 {
                transform: scale(1.05);
            }
           ::-webkit-scrollbar {
                width: 6px;
            }
            ::-webkit-scrollbar-track {
                background: #f1f5f9;
                border-radius: 10px;
            }
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(to bottom, #3b82f6, #1d4ed8);
                border-radius: 10px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(to bottom, #2563eb, #1e40af);
            }
        `;
        document.head.appendChild(style);
    </script>

@endsection