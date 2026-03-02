<!-- Header -->
<header class="h-16 bg-white shadow-md flex items-center justify-between px-6 fixed w-full md:w-[calc(100%-16rem)] top-0 z-0 md:left-64">
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="md:hidden text-gray-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>

    <!-- Search Bar -->
    <div class="hidden md:block">
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </span>
            <input type="text" class="w-64 py-2 pl-10 pr-4 text-gray-700 bg-gray-100 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search...">
        </div>
    </div>

    <!-- Right Side (Profile & Notifications) -->
    <div class="flex items-center space-x-4">
        <!-- Notifications -->
        <button class="relative p-2 text-gray-600 hover:bg-gray-100 rounded-full">
            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
        </button>

        <!-- Profile Dropdown -->
        <div class="relative">
            <button class="flex items-center space-x-2 focus:outline-none">
                <img class="w-8 h-8 rounded-full object-cover" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&auto=format&fit=crop&w=296&q=80" alt="User Avatar">
                <span class="hidden md:block text-sm font-medium text-gray-700">John Doe</span>
            </button>
        </div>
    </div>
</header>