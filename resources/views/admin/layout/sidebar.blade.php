<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="//unpkg.com/alpinejs" defer></script>

<!-- Sidebar -->
<aside class="w-64 shadow-2xl text-white h-screen flex flex-col fixed left-0 top-0 overflow-y-auto z-10 hidden md:flex">
    <!-- Logo -->
    <div class="h-16 flex items-center justify-center border-b border-gray-300">
        <img src="{{ asset('images/logosmi.png') }}" alt="" width="150px" >
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">

        <a href="#" class="flex items-center px-4 py-3 bg-blue-600 text-white rounded-lg transition-colors">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            Dashboard
        </a>

        <div x-data="{ open: true }">
            <!-- Group Title -->
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                <span>Administrator</span>

                <!-- Arrow -->
                <svg :class="{'rotate-90': open}" class="w-4 h-4 transition-transform"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Menu Items -->
            <div x-show="open" x-transition class="space-y-1 mt-2 pl-8">

                <a href="{{ route('hr.index') }}"
                class="flex items-center px-4 py-2 text-blue-500 hover:bg-gray-800 hover:text-white rounded-lg gap-4">
                   <i class="fa-solid fa-database"></i> Data Karyawan
                </a>
                <a href="{{ route('menus.index') }}"
                class="flex items-center px-4 py-2 text-blue-500 hover:bg-gray-800 hover:text-white rounded-lg gap-4">
                   <i class="fa-brands fa-elementor"></i> Menu Management
                </a>
                {{-- <a href="{{ route('submenus.index') }}" --}}
                <a href="{{ route('submenus.index') }}"
                class="flex items-center px-4 py-2 text-blue-500 hover:bg-gray-800 hover:text-white rounded-lg gap-4">
                   <i class="fa-brands fa-elementor"></i> Sub Menu Management
                </a>
            </div>

            @foreach ($menus as $menu)
                <div x-data="{ open: true }">
                    <!-- Group Title -->
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">

                        <span class="flex items-center gap-2">
                            <i class="{{ $menu->icon }}"></i>
                            {{ $menu->name }}
                        </span>

                        <!-- Arrow -->
                        <svg :class="{'rotate-90': open}" class="w-4 h-4 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Sub Menu -->
                    <div x-show="open" x-transition class="space-y-1 mt-2 pl-8">

                        @foreach ($menu->submenus as $submenu)
                            <a href="{{ route($submenu->route) }}"
                                class="flex items-center px-4 py-2 text-blue-500 hover:bg-gray-800 hover:text-white rounded-lg gap-4">
                                <i class="{{ $submenu->icon }}"></i>
                                {{ $submenu->name }}
                            </a>
                        @endforeach

                    </div>
                </div>
            @endforeach
        </div>
    </nav>

    <!-- Logout -->
    <div class="p-4 border-t border-gray-300 ">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="flex items-center px-4 py-2 text-red-500 hover:bg-red-500 hover:text-white w-full rounded-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </button>
        </form>
    </div>
</aside>