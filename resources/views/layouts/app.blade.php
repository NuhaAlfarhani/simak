<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIMAK - @yield('title', 'Dashboard')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
            body { font-family: 'Inter', sans-serif; }
        </style>
    </head>
    <body class="bg-[#F8FAFC] text-slate-800 antialiased flex h-screen overflow-hidden">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content Area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <main class="w-full flex-grow p-6 sm:p-10">
                @include('layouts.topbar')
                
                @yield('content')
            </main>
        </div>
    </body>
</html>