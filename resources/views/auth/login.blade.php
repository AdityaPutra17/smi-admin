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
                <input type="email" placeholder="name@example.com" name="email"
                    class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition-all">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-xs font-medium text-slate-600 uppercase tracking-wide mb-1.5">Password</label>
                <input type="password" placeholder="••••••••" name="password"
                    class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition-all">
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

</body>
</html>