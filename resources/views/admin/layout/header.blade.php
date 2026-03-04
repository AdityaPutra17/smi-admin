<header class="h-16 bg-white shadow-md flex px-6 fixed w-full md:w-[calc(100%-16rem)] top-0 z-0 md:left-64">
        <div class="w-full mx-auto  px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end h-16">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none relative">
                            <span class="sr-only">Lihat notifikasi</span>
                            <i class="fa-regular fa-bell text-xl"></i>
                            <span class="absolute top-0 right-0 block h-2.5 w-2.5 rounded-full bg-red-500 ring-2 ring-white"></span>
                        </button>
                    </div>

                    <div class="ml-3 relative" x-data="{ open: false }">
                        <div >
                            <button @click="open = !open" type="button" class="flex text-sm bg-white justify-center  items-center rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <img class="h-8 w-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=User+Admin&background=6366f1&color=fff" alt="">
                                <span class="px-2">{{ Auth::user()->name }}</span>
                            </button>
                        </div>

                        <div x-show="open" 
                             @click.away="open = false" 
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-gray-200 ring-opacity-5 focus:outline-none z-50" 
                             role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                <i class="fa-solid fa-user mr-2 text-gray-400"></i> Profile Saya
                            </a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                <i class="fa-solid fa-gear mr-2 text-gray-400"></i> Pengaturan
                            </a>

                            <hr class="border-gray-200">

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50" role="menuitem">
                                    <i class="fa-solid fa-right-from-bracket mr-2"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>