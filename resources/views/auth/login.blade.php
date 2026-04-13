<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/smi.svg') }}">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center p-4">
    <div class="flex justify-center mb-4">
        <img src="{{ asset('images/logosmi.png') }}" alt="" width="200px" >
    </div>
    <!-- Main Card -->
    <div class="w-full max-w-sm bg-white rounded-2xl shadow-2xl shadow-slate-200/60 p-8 border border-slate-200">
        
        <!-- Logo / Title -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-semibold text-slate-800">Welcome back</h1>
            <p class="text-sm text-slate-500 mt-2">Login With Your Employee ID</p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf   
            
            <!-- Email -->
            <div>
                <label class="block text-xs font-medium text-slate-600 uppercase tracking-wide mb-1.5">Email</label>
                <input type="text" placeholder="Enter your employee id" name="employee_id"
                    class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition-all" required>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-xs font-medium text-slate-600 uppercase tracking-wide mb-1.5">Password</label>
                <input type="password" placeholder="••••••••" name="password"
                    class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition-all" required>
            </div>

            <!-- Remember & Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-slate-900 focus:ring-slate-900" name="remember">
                    <span class="text-slate-500">Remember me</span>
                </label>
                <a href="#" class="text-slate-900 hover:underline font-medium">Forgot password?</a>
            </div>

            <!-- Button -->
            <button type="submit" class="w-full bg-slate-900 text-white font-medium py-3 px-4 rounded-lg hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 transition-colors">
                Sign in
            </button>
        </form>

    </div>

    <!-- Modal Error -->

    <div id="errorModal" class="fixed inset-0 hidden items-center justify-center bg-black/60 backdrop-blur-sm z-50 p-4">
        <div class="bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/50 p-8 w-full max-w-md mx-4 transform transition-all duration-300 scale-100 animate-in slide-in-from-top-4">
            <!-- Icon Container -->
            <div class="w-20 h-20 bg-gradient-to-r from-red-500/20 to-orange-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 border-2 border-red-200/50 shadow-lg">
                <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                </svg>
            </div>
            
            <!-- Title -->
            <h2 class="text-2xl font-bold bg-gradient-to-r from-red-600 to-red-700 bg-clip-text text-transparent mb-3">
                Login Gagal
            </h2>
            
            <!-- Message -->
            <p class="text-gray-600 text-lg leading-relaxed mb-8 font-medium">
                Employee ID atau password yang Anda masukkan 
                <span class="text-red-500 font-semibold">tidak valid</span>
            </p>
            
            <!-- Action Button -->
            <button onclick="closeModal()" 
                class="group w-full bg-gradient-to-r from-red-600 to-red-700 text-white py-4 px-8 rounded-2xl font-semibold text-lg shadow-xl hover:from-red-700 hover:to-red-800 active:scale-95 transform transition-all duration-200 hover:shadow-2xl border-2 border-transparent hover:border-red-500/50 flex items-center justify-center gap-2">
                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18 18"/>
                </svg>
                Coba Lagi
            </button>
            
            <!-- Subtle decoration -->
            <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-r from-red-500/10 to-transparent rounded-full blur-xl -z-10"></div>
            <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-gradient-to-r from-orange-500/10 to-transparent rounded-full blur-xl -z-10"></div>
        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById('errorModal').classList.add('hidden');
        }

        function openModal() {
            document.getElementById('errorModal').classList.remove('hidden');
            document.getElementById('errorModal').classList.add('flex');
        }
    </script>

    @if ($errors->any())
        <script>
            window.onload = function () {
                openModal();
            }
        </script>
    @endif
</body>
</html>